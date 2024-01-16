<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    class DashboardController extends BaseController {
     
        public function index(){
            return $this->show('admin/Dashboard');
        }
    }