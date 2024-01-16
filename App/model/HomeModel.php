<?php

namespace App\Model;

use App\model\BaseModel;

class HomeModel extends BaseModel {
    protected $table = 'categories'; // Assuming your categories table is named 'categories'

    public function getCategories() {
        // Use the index method from the BaseModel to fetch all categories
        return $this->index($this->table, '*');
    }
}
