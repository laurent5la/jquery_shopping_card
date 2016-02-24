<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;
use Product;

class CartServiceProvider extends ServiceProvider {

/*	private $cart = null;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 /
	public function boot()
	{
		//
	}

	public function get() {
		if ($this->cart === null) {
			$storage = $app['session']; // laravel session storage
            $events = $app['events']; // laravel event handler
            $instanceName = 'cartlist'; // your cart instance name
            $session_key = 'session01'; // your unique session key to hold cart items

            $this->cart = new Cart(
                $storage,
                $events,
                $instanceName,
                $session_key
            );
		}
		return $this->cart;
	}

	public function addProduct(Product $product) {
		Cart::add(array(array('id' => $productId,'name' => $ProductName,'price' => $price,'quantity' => 1)
                            //array('id' => 568,'name' => 'Product 2','price' => 10.00,'quantity' => $q2),
                    ));

	}

	public function removeProduct(Product $product) {

	}
*/
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->app['cartlist'] = $this->app->share(function($app)
        {
            $storage = $app['session']; // laravel session storage
            $events = $app['events']; // laravel event handler
            $instanceName = 'cartlist'; // your cart instance name
            $session_key = 'session01'; // your unique session key to hold cart items

            return new Cart(
                $storage,
                $events,
                $instanceName,
                $session_key
            );
        });
	}

}
