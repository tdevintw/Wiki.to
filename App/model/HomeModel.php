<?php 
    namespace App\Model;
    use App\Model\BaseModel; // Corrected case

    class HomeModel extends Model {

        // private $name;
        // private $description;
        // private $categorie;
        // private $pictue_src;
        // private $status;
        // private $auther;

        public function __construct($name, $description, $category,  $status, $auther) {
            $this->name = $name;
            $this->description = $description;
            $this->categorie = $categorie;
            $this->status = $status;
            $this->auther = $auther;
        }

        // public function index() {
        //     return parent::index('categorie', '*'); // Corrected syntax
        // }
        
    }
