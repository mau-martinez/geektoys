<?php

class DevController extends \BaseController {

	public function index()
	{
		return View::make('dev.index');
	}
}