<?php namespace App\Controllers\api;
 
use CodeIgniter\RESTful\ResourceController;
 
class Users extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\Users';
 
    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }
}