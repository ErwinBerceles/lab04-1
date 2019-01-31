<?php


namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\Student;
use CodeIgniter\Controller;

class StudentController extends Controller
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
       $student_model = new Student();
       $students = $student_model->findAll();
       return $this->respond($students, 200, 'Got Response OK 200 From index function');
  }
}