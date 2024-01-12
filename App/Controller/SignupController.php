<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    class SignupController extends BaseController {
     
        public function index(){
            return $this->show('Signup');
        }
    }