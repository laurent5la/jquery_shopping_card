<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Route;
use Input;
use Config;
use Session;

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
			$path = Route::getCurrentRoute()->getPath();
			switch($path) {
			case 'cos':
				$products  = Config::get('products_cos');
				Session::put('crediton', 'cos');
				//echo $value = Session::get('key'); exit;
				break;
			case 'coo':
				$products  = Config::get('products_coo');
				Session::put('crediton', 'coo');
				break;
			default:
				$products = '';
				Session::put('crediton', '');
				break;
		}

      $footer = Config::get('footer');
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
		);
	}

}
