<?php namespace Ecomm\Http\Controllers;

use Ecomm\Http\Requests;
use Ecomm\Http\Controllers\Controller;

use Request;

// root aliases defined in config/app.php
use Config;
use Illuminate\Support\Facades\Input;
use Session;
use Jenssegers\Agent\Agent;


class PageController extends Controller {

	private $agent;

	public function __construct()
	{
		$this->agent = new Agent();
	}

	/**
	 *
	 * @return Response
	 */
	public function index()
	{
		$params = $this->getParameters();

		switch ($params['type'])
		{
			case 'cos':
				return $this->creditOnSelf();
				break;
			case 'coo':
				return $this->creditOnOthers();
				break;
			default :
				 return $this->_products('');
				break;
		}
	}

	/**
	 *
	 * @return View
	 */
	public function creditOnSelf()
	{
		return $this->_products('cos');
	}

	/**
	 *
	 * @return View
	 */
	public function creditOnOthers()
	{
		return $this->_products('coo');
	}

	/**
	 *
	 * @return View
	 */
	private function _products($crediton)
	{
		Session::set('crediton', $crediton );
		$params = $this->getParameters();

		switch($crediton) {
			case 'cos':
			case 'coo':
				$products = Session::get('crediton');
				break;
			default:
				$products = '';
				break;
		}

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


	public function getParameters()
	{
		$formData = Request::all();

		$params = array(
				'keyword' => isset($formData ['companyName']) ? $formData ['companyName'] : '',
				'address' => isset($formData ['address']) ? $formData ['address'] : '',
				'city' => isset($formData ['city']) ? $formData ['city'] : '',
				'state' => isset($formData ['state']) ? $formData ['state'] : '',
				'zip' => isset($formData ['zip']) ? $formData ['zip'] : '',
				'country' => isset($formData ['country']) ? $formData ['country'] : '',
				'type' => isset($formData ['type']) ? $formData ['type'] : ''
			);

		return $params;
	}
}
