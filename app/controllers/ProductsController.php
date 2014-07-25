<?php

class ProductsController extends \BaseController {

	public function index($category = null)
	{
		$this->layout->content = View::make('products.index')->with('category',$category);
	}

	public function show($id = null)
	{
		if (!isset($id)) {
			App::abort(404);
		}
		
		$this->layout->content = View::make('products.show')->with('id', $id);
	}
}