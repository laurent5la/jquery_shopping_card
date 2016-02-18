<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;

use Cart;
use Config;
use Session;
use Jenssegers\Agent\Agent;

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
	private $agent;

	public function __construct(){
		$this->agent= new Agent();
	}



	public function index()
	{
                $products  = Config::get('products');
                $params = array(); 
		$agent = null;
                return view(
			'products',
			[
               'products' =>	$products,
               'phx_url' => Config::get('phx'),
			   'params' => $params,
			   'footer' => Config::get('footer'),
			   'products',array('agent'=>$this->agent)
            ]
		);
	}

}
