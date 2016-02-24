<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;


class CartProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

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
