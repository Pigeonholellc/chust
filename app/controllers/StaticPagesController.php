<?php

class StaticPagesController extends \BaseController {

	public function home()
	{
		return View::make('pages.home');
	}

}
