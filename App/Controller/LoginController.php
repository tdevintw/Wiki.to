<?php

namespace App\Controller;

use App\Model\UserModel;

class LoginController extends BaseController
{
    private $errors = [];

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->logIn();
        }
        session_start();
        if(isset($_SESSION['user_name'])){
        $result = $this->show('Home', ['errors' => $this->errors]);
        }else{
        $result = $this->show('Login', ['errors' => $this->errors]);
        }
        return $result;
    }

    public function logIn()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($password) || empty($email)) {
            $this->errors['fill_all'] =  "Fill in all the inputs";
        } else {
            $userModel = new UserModel();

            $user = $userModel->logIn($email);

            if (!$user) {
                $this->errors['doesnt_exist'] = "Email doesn't exist. Sign up now.";
            } elseif (password_verify($password, $user['hashed_password'])) {
                session_start();
                $username = $user['username'];
                $userid = $user['id'];
                setcookie('user_name',$username,time()+60);
                $_SESSION['user_name']= $username;
                setcookie('user_id',$userid,time()+60);
                $_SESSION['user_id']=$userid;
                header("Location: /");
            } else {
                $this->errors['incorrect_password'] =  "Incorrect password.";
            }
        }
    }

    public function Logout() {
        session_start();
         session_destroy();
         header("Location: ../../.");
    }
}