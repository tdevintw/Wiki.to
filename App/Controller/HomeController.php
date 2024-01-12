<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    class HomeController extends Controller {
     
        public function index(){
            
            include 'App/view/Home.php';
        }
    }