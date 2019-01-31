<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 2019-01-29
 * Time: 11:51
 */
namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{
    protected $id;
    protected $description;
    protected $drink;

    protected $data =
        [
        'potato' =>
            [
                'id' => 'Vincent',
                'description'=>'Asian, tall',
                'drink'=>'bubbletea'
            ],
		'Waifu' =>
			[
				'id' => 'Inori',
				'description'=>'Reserved, a good singer, relaxed',
				'drink'=>'Matcha'
            ] ,
			
		'Watermelon' =>
            [
                'id' => 'Antonio',
                'description'=>'tall man',
                'drink'=>'starbucks'
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