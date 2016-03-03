<?php
    namespace App\Http\Controllers;

    use GuzzleHttp\Client;
    use GuzzleHttp\Exception\RequestException;
    use App\Providers\CartProvider;
    use Input;
    use App\Http\Requests;
    use Config;
    use Session;
    use Request;

    class CheckoutController extends Controller
    {

        /**
         * Create a new controller instance.
         *
         * @return void
         */

        private $shoppingCart;
        private $promoValue;

        public function __construct(array $attributes = array())
        {
        //    $this->client = new Client();
        //    $this->config = app()['config'];
        //    $this->clientID = $this->config->get('owl.client_id');
        //    $this->clientSecret = $this->config->get('owl.client_secret');
        //    $this->cacheKeyForOWLToken = 'OWL-TOKEN' . '-' . $this->clientID;
            $this->shoppingCart = app('cartlist');
            $this->promoValue = array(
                "dollar" => 0,
                "cents"  => 0
                );


        }

        //private function getAccessToken()
        //{
        //    if (!Cache::has($this->cacheKeyForOWLToken)) {
        //        $this->accessToken = $this->createAccessToken();

        //        if (is_null($this->accessToken)) {
        //            return null;
        //        }
        //        Cache::put($this->cacheKeyForOWLToken, $this->accessToken, 24 * 60);
        //    }
        //    return Cache::get($this->cacheKeyForOWLToken);
        //}

        private function createAccessToken()
        {
            $this->client->setDefaultOption('headers', $this->xSSLOptions);

            $URL = Config::get('owl.base_url') . '/v1/oauth/token';
            $params = array(
                'query' => array(
                    'grant_type' => 'client_credentials',
                    'client_id' => $this->clientID,
                    'client_secret' => $this->clientSecret,
                )
            );

            $response = $this->getGuzzleRequest($URL, $params);

            if ($response) {
                $this->accessToken = $response['access_token'];

                return $this->accessToken;
            }
            return null;
        }

        public function index() {

            //Upsell 
            //$j=Input::get('i');
            $products  = Config::get('products_coo');
            $footer = Config::get('footer');

            //Shopping Cart

            $params = Request::all();

            $cartData = array(
                'id' => $params['productId'],
                'name' => $params['ProductName'],
                'price' => $params['dollars'] + ($params['cents'] * 0.01) ,
                'quantity' => 1
                );

            // Adding contents to the Cart
            $this->shoppingCart->add($cartData);

            // Adding conditions to the whole Cart
            $taxCondition = $this->applyCartCondition(array(
                'name' => 'VAT 12.5%',
                'type' => 'tax',
                'target' => 'subtotal',
                'value' => '4.99',
            ));

            $getViewVariables = $this->getViewVariables(__FUNCTION__, $params);

            $getViewVariables['products'] = $products;

            return view('checkout', $getViewVariables);

        }

        public function annual()
        {

            $params = Request::all();

            $priceValue = $params['next_priceD'] + ($params['next_priceC'] * 0.01);

            // Update shopping cart contents with the new price
            $this->shoppingCart->update($params['product_id'], array('price' => $priceValue));
    
            $getViewVariables = $this->getViewVariables(__FUNCTION__);
            
            return json_encode($getViewVariables);
        
        }

        public function coupon()
        {
            //$this->shoppingCart = app('cartlist');
            $couponCondition = $this->applyCartCondition(array(
                'name' => 'Discount 4.99',
                'type' => 'coupon',
                'target' => 'subtotal',
                'value' => '-4.99',
            ));

            $getViewVariables = $this->getViewVariables(__FUNCTION__);
            
            return json_encode($getViewVariables);
        }

        public function close()
        {
            $params = Request::all();

            //Remove the item
            $this->shoppingCart->remove($params['product_id']);

            $getViewVariables = $this->getViewVariables(__FUNCTION__);
            
            if(!is_null($getViewVariables))
            {   
                return view('partials.shoppingcart',$getViewVariables);
            }
            else
            {
                return "Shopping Cart Empty!";
            }

        }

        private function applyCartCondition($params)
        {
            // Adding conditions to the whole Cart
            $condition = new \Darryldecode\Cart\CartCondition($params);
            $this->shoppingCart->condition($condition);
            return $condition;
        }

        private function splitAmount($params)
        {
            $amount = explode(".", $params);
            if(count($amount) == 1)
                $amount[1] = '00';
            return $amount;
        }

        private function calculateCartAmount($functionName)
        {
            $cartAmount = array();
            if($functionName == "index" or $functionName == "close")
            {
                //Tax Amount
                $cartCondition = $this->shoppingCart->getCondition('VAT 12.5%');
                $getTax = $cartCondition->getValue();
                $cartAmount['taxValue'] = $this->splitAmount($getTax);

            }

            // Total amount without conditions applied
            $getSubTotal = $this->shoppingCart->getSubTotal();
            $cartAmount['subTotalValue'] = $this->splitAmount($getSubTotal);

            // Total amount with all the conditions applied
            $getTotal = $this->shoppingCart->getTotal();
            $cartAmount['totalValue'] = $this->splitAmount($getTotal);
          
            return $cartAmount;
        }

        private function getViewVariables($functionName, $params=array())
        {
            
            $getCartAmount = $this->calculateCartAmount($functionName);

            // Passing all the contents to the view
            $cartItems = $this->shoppingCart->getContent();

            if($cartItems->count() == 0)
                return null;


            $viewVariables = array(   
                'subTotalD' => $getCartAmount['subTotalValue'][0], 
                'subTotalC' => $getCartAmount['subTotalValue'][1], 
                'totalD' => $getCartAmount['totalValue'][0],
                'totalC' => $getCartAmount['totalValue'][1],
                'items' => $cartItems, 
                'promoD' => $this->promoValue['dollar'],
                'promoC' => $this->promoValue['cents'],
                );

            if($functionName == "index")
            { 
                $viewVariables['dollars'] = $params['dollars'];
                $viewVariables['cents'] = $params['cents']; 
                $viewVariables['j'] = $params['i']; 
            }
            if($functionName == "index" or $functionName == "close")
            {
                $viewVariables['taxD'] = $getCartAmount['taxValue'][0];
                $viewVariables['taxC'] = $getCartAmount['taxValue'][1];
            }

            return $viewVariables;
                
        }

    }