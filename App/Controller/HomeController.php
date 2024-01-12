<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    class HomeController extends BaseController {
     
        public function index(){
            return $this->show('Home');
        }
    }