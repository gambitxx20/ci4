<?php namespace App\Controllers;

use App\Models\Users;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{	
		$data = array(
	      	'content' => 'welcome_message',
	      );
	    return view('layout',$data);
	}

	public function test()
	{
		$session = \Config\Services::session();
	      $message = $session->getFlashdata('message');
	      $std = new Users();
	      $students = $std->findAll();

	      $pager = \Config\Services::pager();
	      $message = $message;

	      $data = array(
	      	'students' => $students,
	      	'message' => $message,
	      	'content' => 'index',
	      );
	      return view('layout',$data);

	}

	public function add(){
		$data = array(
	      	'content' => 'add',
	      );
	    return view('layout',$data);
	}

	public function add_action(){
		$name   = $this->request->getPost('name');
        $password   = $this->request->getPost('password');

        echo $name;
        echo md5($password);
	}

	//--------------------------------------------------------------------

}
