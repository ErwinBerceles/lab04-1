<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 2019-01-29
 * Time: 11:51
 */
namespace App\Models;

use CodeIgniter\Models;

class Classes extends Model
{
    protected $id;
    protected $description;
    protected $difficulty;

    protected $data =
        [
        'comp4711' =>
            [
                'id' => 'comp4711',
                'description'=>'confusing php',
                'difficulty'=>'hard'
            ] ,
		
        'comp4711_Antonio' =>
            [
                'id' => 'comp4711_Antonio',
                'description'=>'very confusing php',
                'difficulty'=>'super hard'
            ]		
        ];

    public function find($id)
    {
        return $this->data[$id];
    }

    public function findall()
    {
        return $this->data;
    }


}