<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CategorysTable extends Table
{

    public function initialize(array $config)
    {
        $this->setTable('categories');

        $this->setPrimaryKey('category_id');
         $this->hasMany('Items', [
            'foreignKey' => 'category_id'
        ]);

	
    }

}
