<?php

class HomeController extends BaseController {

	public function home()
	{
		$this->layout->content = View::make('home.home');
	}

	public function contact()
	{
		$this->layout->content = View::make('home.contact');
	}
}
