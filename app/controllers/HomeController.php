<?php

class HomeController extends BaseController {

	public function home()
	{
		return View::make('home.home');
	}

	public function contact()
	{
		return View::make('home.contact');
	}
}
