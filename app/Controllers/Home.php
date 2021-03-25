<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'SMAN 1 Margaasih',
			'kepsek' => 'Ade Rohaendi, M. Pd'
		];
		return view('welcome_message', $data);
	}
}
