<?php

namespace App\model;

use PDOException;

class CategoryModel extends BaseModel
{
    public function index($table, $columns)
    {
        return parent::index($table, $columns);
    }

    public function insert($table, $data)
    {
        try {
            parent::insert($table, $data);
            return true;
        } catch (PDOException $e) {
            echo "Error during insertion: " . $e->getMessage();
            return false;
        }
    }

    public function update($table, $data, $id)
    {
        try {
            parent::update($table, $data, $id);
            return true;
        } catch (PDOException $e) {
            echo "Error during update: " . $e->getMessage();
            return false;
        }
    }

    public function delete($id)
{
    try {
        $query = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        echo "Error during deletion: " . $e->getMessage();
        return false;
    }
}

    public function getAllCategories()
    {
        try {
            $query = "SELECT * FROM categories";
            $stmt=$this->db->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error retrieving categories: " . $e->getMessage();
            return false;
        }
    }
}