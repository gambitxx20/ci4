<?php namespace App\Controllers;

use App\Models\Users;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function test()
	{
		$session = \Config\Services::session();
	      $message = $session->getFlashdata('message');
	      $std = new Users();
	      $std = $std->builder();
	      $students = $std->findAll();

	      $pager = \Config\Services::pager();
	      $message = $message;

	      $data = array(
	      	'students' => $students,
	      	'message' => $message,
	      );
	      return view('jancok',$data);

	}

	//--------------------------------------------------------------------

}
