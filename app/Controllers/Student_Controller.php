<?php


namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\Student;
use CodeIgniter\Controller;

class Student_Controller extends Controller
{
   use ResponseTrait;

   public function show()
   {

   }

   public function index()
   {
       echo 'hallo';
   }

   public function edit()
   {

       return $this->fail(["Not Implemented"], 200);
   }
}
