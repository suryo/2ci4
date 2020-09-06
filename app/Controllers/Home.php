<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Home',
			'isi' => 'v_home',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function menu1()
	{
		$data=[
			'title' => 'menu 1',
			'isi' => 'v_menu1',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function submenu1()
	{
		$data=[
			'title' => 'sub menu 1',
			'isi' => 'v_submenu1',
		];
		echo view('layout/v_wrapper',$data);
	}

	public function submenu2()
	{
		$data=[
			'title' => 'sub menu 2',
			'isi' => 'v_submenu2',
		];
		echo view('layout/v_wrapper',$data);
	}

	//--------------------------------------------------------------------

}
