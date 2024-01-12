<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    class AboutController extends BaseController {
     
        public function index(){
            return $this->show('About');
        }
    }