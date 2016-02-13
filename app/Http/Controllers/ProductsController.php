<?php

namespace App\Http\Controllers;

use Config;

class ProductsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Product Controller
	|--------------------------------------------------------------------------
	|
	| Controller which display products to be selected
	| Product information is coming from an external CMS but cached on the app
	| server.
	*/

	/**
	 * Show the products to be sold
	 *
	 * @return Response
	 */
	public function index()
	{
		return view(
			'page.products',[
				'products' => Config::get($products),
				'phx_url' => Config::get('phx'),
				'params' => $params,
				'footer' => Config::get('footer'),
				'agent' => $this->agent,
			]
		);
	}

}
