<?php

namespace App\Controller;

use App\model\CategoryModel;
use PDOException;

class CategoryController extends BaseController
{

    public function index()
    { 

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->insert();
        }
        // Instantiate the model
        $categoryModel = new CategoryModel();

        // Fetch all categories
        $categories = $categoryModel->getAllCategories();

        // Pass categories to the view
        return $this->show('admin/Category', ['categories' => $categories]);

    }


   
   
    public function insert()
    {
        // Check if the form is submitted

        $category = array(
            'name' => $_POST['category'],
        );
        
            $categoryModel = new CategoryModel();

            // Insert data into the database
            $result = $categoryModel->insert('category', $category);

            if ($result) {
                echo "Data inserted successfully.";
            } else {
                echo "Failed to insert data.";
            }

            // Include the view file
            header("Location: Category");
            }


    public function update($id)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $table = 'categories';
        $data = array(
            'category' => $_POST['category'],
        );

        $categoryModel = new CategoryModel();

        $result = $categoryModel->update($table, $data, $id);

        if ($result) {
            header("Location: ../../Category");
            } else {
            echo "Error updating record!";
        }
    } else {
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getById('categoriy', $id);

        include 'App/view/admin/categories/index.php';
    }
}

public function delete()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $categoryId = $_POST['category_id'];
        $categoryModel = new CategoryModel();

        $result = $categoryModel->delete($categoryId);

        if ($result) {
            header("Location: ../Category");
        } else {
            echo "Error deleting category!";
        }
    }
}

}