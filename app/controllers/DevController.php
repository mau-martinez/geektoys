<?php

class DevController extends \BaseController {

	protected $layout = 'layouts.master';

	public function index()
	{
		$this->layout->content = View::make('dev.index');
	}
}