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
    protected $favourite;

    protected $data =
        [
        'potato' =>
            [
                'id' => 'Vincent',
                'description'=>'Asian, tall',
                'drink'=>'bubbletea'
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