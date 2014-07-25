<?php

class DevController extends \BaseController {

	public function index()
	{
		$this->layout->content = View::make('dev.index');
	}
}