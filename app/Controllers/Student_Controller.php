<?php


namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\Student;
use CodeIgniter\Controller;

class StudentController extends Controller
{
   use ResponseTrait;

   public function show()
   {

   }

   public function index()
   {
       echo 'hallo';
   }
}
