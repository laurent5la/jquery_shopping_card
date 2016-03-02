<?php
    namespace App\Http\Controllers;

    use GuzzleHttp\Client;
    use GuzzleHttp\Exception\RequestException;
    use App\Providers\CartServiceProvider;
    use Input;
    // use Cart;
    //use Request;
    use Illuminate\Http\Request;
    use Config;
    use Session;

    class CheckoutController extends Controller
    {

        /**
         * Create a new controller instance.
         *
         * @return void
         */


        public function __construct(array $attributes = array())
        {
        //    $this->client = new Client();
        //    $this->config = app()['config'];
        //    $this->clientID = $this->config->get('owl.client_id');
        //    $this->clientSecret = $this->config->get('owl.client_secret');
        //    $this->cacheKeyForOWLToken = 'OWL-TOKEN' . '-' . $this->clientID;

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

        public function index(Request $request) {

            //Upsell 
            $j=Input::get('i');
            $products  = Config::get('products_coo');
            $footer = Config::get('footer');

            //Shopping Cart

            // Using the instantiated shopping cart
            $shoppingCart = app('cartlist');

            $ProductName = Input::get('ProductName');
            $dollars = Input::get('dollars');
            $cents = Input::get('cents');
            $productId = Input::get('productId');
            $price = ($dollars) + ($cents*0.01);


            // Adding contents to the Cart
            $shoppingCart->add(array('id' => $productId,'name' => $ProductName,'price' => $price,'quantity' => 1, array()));


            // Adding conditions to the whole Cart
            $condition1 = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'VAT 12.5%',
                'type' => 'tax',
                'target' => 'subtotal',
                'value' => '---',
            ));

            // Applying the condition to the Cart
            $shoppingCart->condition($condition1);

            
            // Passing conditions to the view
            $cartCondition = $shoppingCart->getCondition('VAT 12.5%');
            $tax = $cartCondition->getValue();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $tax);
            $taxD = $arr[0];
            if(sizeof($arr) > 1)
                $taxC = $arr[1];
            else
                $taxC = '00';

            // Total amount without conditions applied
            $subTotal =$shoppingCart->getSubTotal();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $subTotal);
            $subTotalD = $arr[0];
            if(sizeof($arr) > 1)
                $subTotalC = $arr[1];
            else
                $subTotalC = '00';

            // Total amount with all the conditions applied
            $total = $shoppingCart->getTotal();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $total);
            $totalD = $arr[0];
            if(sizeof($arr) > 1)
                $totalC = $arr[1];

            else
                $totalC = '00';


            //Setting promo Variables to 0
            $promoD = 0;
            $promoC = 0;

            // Passing all the contents to the view
            $items = $shoppingCart->getContent();

            return view('checkout',array('items' => $items, 'dollars'=>$dollars, 'cents'=>$cents, 'taxD' => $taxD,
                'taxC' => $taxC,'subTotalD' => $subTotalD, 'subTotalC' => $subTotalC, 'totalD' => $totalD,
                'totalC' => $totalC, 'promoD' => $promoD, 'promoC' => $promoC, 'j'=>$j, 'products' =>$products));

        }

        public function annual()
        {

            $itemId = Input::get('product_id');
            $priceD = Input::get('next_priceD');
            $priceC = Input::get('next_priceC');

            $shoppingCart = app('cartlist');


            $price = ($priceD) + ($priceC*0.01);

            // Update shopping cart contents with the new price
            $shoppingCart->update($itemId, array('price' => $price));
    
    
            $subTotal = $shoppingCart->getSubTotal();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $subTotal);
            $subTotalD = $arr[0];
            if(sizeof($arr) > 1)
                $subTotalC = $arr[1];
            else
                $subTotalC = '00';

            $total = $shoppingCart->getTotal();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $total);
            $totalD = $arr[0];
            if(sizeof($arr) > 1)
                $totalC = $arr[1];

            else
                $totalC = '00';
            
            echo json_encode(array('subTotalD' => $subTotalD, 'subTotalC' => $subTotalC, 'totalD' => $totalD,'totalC' => $totalC));
        
        }

        public function coupon()
        {
            $shoppingCart = app('cartlist');
            $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Discount 4.99',
            'type' => 'coupon',
            'target' => 'subtotal',
            'value' => '-4.99',
            ));

            // Applying the condition to the Cart
            $shoppingCart->condition($condition);

            $subTotal = $shoppingCart->getSubTotal();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $subTotal);
            $subTotalD = $arr[0];
            if(sizeof($arr) > 1)
                $subTotalC = $arr[1];
            else
                $subTotalC = '00';

            $total = $shoppingCart->getTotal();
            //Converting to dollars & cents for display purpose
            $arr = explode(".", $total);
            $totalD = $arr[0];
            if(sizeof($arr) > 1)
                $totalC = $arr[1];

            else
                $totalC = '00';
            
            echo json_encode(array('subTotalD' => $subTotalD, 'subTotalC' => $subTotalC, 'totalD' => $totalD,'totalC' => $totalC));
        }

        public function close()
        {
            $itemId = Input::get('product_id');

            $shoppingCart = app('cartlist');

            //Remove the item
            $shoppingCart->remove($itemId);

            $items = $shoppingCart->getContent();
            $count = $items->count();
            
            if($count > 0)
            {   
                // Passing conditions to the view
                $cartCondition = $shoppingCart->getCondition('VAT 12.5%');
                $tax = $cartCondition->getValue();
                //Converting to dollars & cents for display purpose
                $arr = explode(".", $tax);
                $taxD = $arr[0];
                if(sizeof($arr) > 1)
                    $taxC = $arr[1];
                else
                    $taxC = '00';

                // Total amount without conditions applied
                $subTotal =$shoppingCart->getSubTotal();
                //Converting to dollars & cents for display purpose
                $arr = explode(".", $subTotal);
                $subTotalD = $arr[0];
                if(sizeof($arr) > 1)
                    $subTotalC = $arr[1];
                else
                    $subTotalC = '00';

                // Total amount with all the conditions applied
                $total = $shoppingCart->getTotal();
                //Converting to dollars & cents for display purpose
                $arr = explode(".", $total);
                $totalD = $arr[0];
                if(sizeof($arr) > 1)
                    $totalC = $arr[1];

                else
                    $totalC = '00';


                //Setting promo Variables to 0
                $promoD = 0;
                $promoC = 0;


                return view('partials.shoppingcart',array('items' => $items, 'taxD' => $taxD,
                'taxC' => $taxC,'subTotalD' => $subTotalD, 'subTotalC' => $subTotalC, 'totalD' => $totalD,
                'totalC' => $totalC, 'promoD' => $promoD, 'promoC' => $promoC,));
            }
            else
            {
                return "Shopping Cart Empty!";
            }

        }

    }