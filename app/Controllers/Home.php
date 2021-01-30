<?php namespace App\Controllers;

class Home extends BaseController
{
	
	

	public function index()
	{
		$this->response->CSP->setDefaultSrc('self');
		$this->response->CSP->addStyleSrc('https://maxcdn.bootstrapcdn.com');
		$this->response->CSP->addFontSrc('https://maxcdn.bootstrapcdn.com');
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
