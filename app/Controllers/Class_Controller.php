<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use App\Models\Classes;


class Class_Controller extends Controller
{

  public function show($id)
  {
		$class_model = new Classes;
		$classes = $class_model->find($id);
		return $this->respond($classes, 200, 'Got Response OK 200 from show function');
  }

  public function index()
  {
		$class_model = new Classes();
		$classes = $class_model->findAll();
		return $this->respond($classes, 200, 'Got Response OK 200 From index function');
  }

  public function new()
  {
		return $this -> fail(["Not implemented"],418);
  }
  
  public function update()
  {
		return $this -> fail(["Not implemented"],418);
  }
  
  public function edit()
  {
		return $this -> fail(["Not implemented"],418);
  }
  
  public function delete()
  {
		return $this -> fail(["Not implemented"],418);
  }
	  
  public function create()
  {
		return $this -> fail(["Not implemented"],418);
  }
  
}
