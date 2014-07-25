<?php

class BaseController extends Controller {

	protected $layout = 'layouts.master';

	public function __construct()
	{                   
		$categories = array(
			array('slug' =>'juguetes', 'label' => 'Juguetes'),
			array('slug' =>'electronicos', 'label' => 'Electrónicos'),
			array('slug' =>'figuras', 'label' => 'Figuras'),
			array('slug' =>'juegos-de-mesa', 'label' => 'Juegos de mesa'),
			array('slug' =>'pedidos', 'label' => 'Pedidos'));

		View::share('categories', $categories);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
