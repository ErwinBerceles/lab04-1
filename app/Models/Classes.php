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
            ],
		'comm1116' =>
			[	
				'id' => 'comm1116',
				'description'=>'Making up everything up on the spot',
				'difficulty'=>'easy'
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