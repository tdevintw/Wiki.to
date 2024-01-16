<?php

namespace App\Controller;

use App\model\TagModel;
use PDOException;

class TagController extends BaseController
{

    public function index()
    { 

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->insert();
        }
        // Instantiate the model
        $TagModel = new TagModel();

        // Fetch all tags
        $tags = $TagModel->getAllTags();

        // Pass tags to the view
        return $this->show('admin/Tag', ['tags' => $tags]);

    }


   
   
    public function insert()
    {
        // Check if the form is submitted

        $Tag = array(
            'name' => $_POST['tag'],
        );
        
            $TagModel = new TagModel();

            // Insert data into the database
            $result = $TagModel->insert('tag', $Tag);

            if ($result) {
                header("Location: Tag");
                } else {
                echo "Failed to insert data.";
            }

            // Include the view file
            header("Location: Tag");
            }


    public function update($id)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $table = 'tags';
        $data = array(
            'Tag' => $_POST['tag'],
        );

        $TagModel = new TagModel();

        $result = $TagModel->update($table, $data, $id);

        if ($result) {
            header("Location: ../../Tag");
            } else {
            echo "Error updating record!";
        }
    } else {
        $TagModel = new TagModel();
        $Tag = $TagModel->getById('tag_id', $id);

        include 'App/view/admin/tags/index.php';
    }
}

public function delete()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $categoryId = $_POST['tag_id'];
        $TagModel = new TagModel();

        $result = $TagModel->delete($categoryId);

        if ($result) {
            header("Location: ../Tag");
        } else {
            echo "Error deleting Tag!";
        }
    }
}

}