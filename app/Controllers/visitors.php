<?php

namespace App\Controllers;

class visitors extends BaseController
{
	public function index()
	{
		return view('visitantes_view');
	}
}