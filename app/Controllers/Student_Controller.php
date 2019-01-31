<?php


namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\Student;
use CodeIgniter\Controller;

class Student_Controller extends Controller
{
   use ResponseTrait;

   public function show($id)
   {
	   $student_model = new Student;
       $student = $student_model->find($id);
       return $this->respond($student, 200, 'Got Response OK 200 from show function');
   }

   public function index()
   {
       $student_model = new Student;
       $student = $student_model->find($id);
       return $this->respond($student, 200, 'Got Response OK 200 from show function');
   }

   public function edit()
   {

       return $this->fail(["Not Implemented"], 200);
   }
   
      public function new()
   {

       return $this->fail(["Not Implemented"], 200);
   }
   
      public function create()
   {

       return $this->fail(["Not Implemented"], 200);
   }
   
      public function update()
   {

       return $this->fail(["Not Implemented"], 200);
   }
   
      public function delete()
   {

       return $this->fail(["Not Implemented"], 200);
   }
}
