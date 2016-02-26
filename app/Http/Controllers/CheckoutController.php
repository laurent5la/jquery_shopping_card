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

            //$this->instantiateCart();
            $shoppingCart = app('cartlist');

            //$shoppingCart::add(455, 'Sample Item', 100.99, 2, array());

            $ProductName = Input::get('ProductName');
            $dollars = Input::get('dollars');
            $cents = Input::get('cents');
            $productId = Input::get('productId');
            $priceId = Input::get('priceId');
            $price = ($dollars) + ($cents*0.01);
            $j=Input::get('i');
            $products  = Config::get('products_coo');
            $footer = Config::get('footer');


            // Adding contents to the Cart
            $shoppingCart->add(array('id' => $productId,'name' => $ProductName,'price' => $price,'quantity' => 1, array()));
                            //array('id' => 568,'name' => 'Product 2','price' => 10.00,'quantity' => $q2),


            // Adding conditions to the whole Cart
            $condition1 = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'VAT 12.5%',
                'type' => 'tax',
                'target' => 'subtotal',
                'value' => '6.50',
            ));

            // Applying the condition to the Cart
            $shoppingCart->condition($condition1);

            // Passing all the contents to the view
            $items = $shoppingCart->getContent();

            // Passing conditions to the view
            //$cartConditions = Cart::getConditions();
            $cartCondition = $shoppingCart->getCondition('VAT 12.5%');
            $tax = $cartCondition->getValue();
            //Converting to dollars & cents
            $arr = explode(".", $tax);
            $taxD = $arr[0];
            if(sizeof($arr) > 1)
                $taxC = $arr[1];
            else
                $taxC = '00';

            // Total amount without conditions applied
            $subTotal =$shoppingCart->getSubTotal();

            //Converting to dollars & cents
            $arr = explode(".", $subTotal);
            $subTotalD = $arr[0];
            if(sizeof($arr) > 1)
                $subTotalC = $arr[1];
            else
                $subTotalC = '00';

            // Totak amount with all the conditions applied
            $total = $shoppingCart->getTotal();

            //Converting to dollars & cents
            $arr = explode(".", $total);
            $totalD = $arr[0];
            if(sizeof($arr) > 1)
                $totalC = $arr[1];

            else
                $totalC = '00';

            
            return view('checkout',array('ProductName'=>$ProductName, 'dollars'=>$dollars, 'cents'=>$cents,'items' => $items, 'taxD' => $taxD, 'taxC' => $taxC,
                                         'subTotalD' => $subTotalD, 'subTotalC' => $subTotalC, 'totalD' => $totalD, 'totalC' => $totalC,'productId'=> $productId,'priceId'=>$priceId,'j'=>$j,'products'=>$products,'footer' => $footer)); 
        }

        public function coupon()
        {

            $itemId = Input::get('product_id');

            $shoppingCart = app('cartlist');

            //Cart::instance('cartlist')->(455, 'Sample Item', 100.99, 2, array());

            $a = $shoppingCart->get($itemId);
            //$a = $shoppingCart::get('455');

            //$a = $shoppingCart::getSubTotal();
            $data = $request->session()->all();
            echo $data;
            /*
            if($a)
                echo $a;
            else
                echo "fail";
            */
        }

    }
