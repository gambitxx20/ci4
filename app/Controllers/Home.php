<?php namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{	

		$session = \Config\Services::session();
	      $message = $session->getFlashdata('message');
	      $std = new UsersModel();
	      $users = $std->findAll();

	      $pager = \Config\Services::pager();
	      $message = $message;

	      $data = array(
	      	'users' => $users,
	      	'message' => $message,
	      	'title' => 'Testing index',
	      	'content' => 'index',
	      );
	      return view('layout',$data);

	}

	public function add(){
		$data = array(
	      	'title' => 'Testing add',
	      	'content' => 'add',
	      );
	    return view('layout',$data);
	}

	public function add_action(){
		$user = new UsersModel();

		$name   = $this->request->getPost('name');
        $password   = $this->request->getPost('password');
        $c_password = $this->request->getPost('c_password');
        if ($password == $c_password) {
        	$data = array(
        		'name' => $name,
        		'password' => md5($password),
        	);
        	$save = $user->insert($data);
        	return redirect()->to(base_url('home')); 
        }else{
        	echo 'Password Tidak Cocok';
        }
	}

	public function edit($id){
		$user = new UsersModel();
		$user = $user->where('id', $id)->first();
		$data = array(
	      	'title' => 'Testing edit',
	      	'content' => 'edit',
	      	'user' => $user,
	      );
	    return view('layout',$data);
	}

	public function edit_action($id){
		$user = new UsersModel();

		$name   = $this->request->getPost('name');
        $password   = $this->request->getPost('password');
        $c_password = $this->request->getPost('c_password');
        if ($password == $c_password) {
        	$data = array(
        		'name' => $name,
        		'password' => md5($password),
        	);
        	$update = $user->update($id,$data);
        	return redirect()->to(base_url('home')); 
        }else{
        	echo 'Password Tidak Cocok';
        }
	}

	public function delete($id){
		$user = new UsersModel();
		$delete = $user->where('id', $id)->delete();
	    return redirect()->to(base_url('home')); 
	}

	//--------------------------------------------------------------------

}
