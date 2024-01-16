<?php

namespace App\model;

use PDOException;

class WikiModel extends BaseModel
{
    public function index($table, $columns)
    {
        return parent::index($table, $columns);
    }


        public function insert($table, $data)
        {
            try {
                $columns = implode(", ", array_keys($data));
                $values = ":" . implode(", :", array_keys($data));

                $query = "INSERT INTO tags (tag) VALUES ($values)";
                $stmt = $this->db->prepare($query); // Utilisez $this->db au lieu de $this->PDO
                $stmt->execute($data);

                echo "Record added successfully!";
            } catch (PDOException $e) {
                echo "Error creating record: " . $e->getMessage();
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
        $query = "DELETE FROM Tags WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        echo "Error during deletion: " . $e->getMessage();
        return false;
    }
}

    public function getAllTags()
    {
        try {
            $query = "SELECT * FROM Tags";
            $stmt=$this->db->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error retrieving categories: " . $e->getMessage();
            return false;
        }
    }
}