<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    class LoginController extends BaseController {
     
        public function index(){
            return $this->show('Login');
        }
    }