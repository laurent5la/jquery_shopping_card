<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
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
                $products  = Config::get('products');

                $footer = Config::get('footer');
                // print_r($footer);exit;
                $params = array(); 
				$agent = null;
                return view(
			'products',
			[
               'products' =>	$products,
               'phx_url' => Config::get('phx'),
			   'params' => $params,
			   'footer' => $footer,
            ]

		//return View::make('footer',)->with('footer',($footer)->with());
		);	
	}

}
