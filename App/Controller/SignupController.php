<?php

namespace App\Controller;

use App\Model\UserModel;

// use app\Controller\BaseController;
class SignupController extends BaseController
{

    public function index()
    {
        return $this->show('Signup');
    }

    public function signUp()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $repeat_password = $_POST['repeat_password'];

            if (empty($username) || empty($password) || empty($email) || empty($repeat_password)) {
                echo "fill all the inputs";
            } else {
                if ($username != $repeat_password) {
                    echo "confirm password is not correct";
                } else {
                    $UserModel = new UserModel();

                    if ($UserModel->isUsernameTaken($email)) {
                        echo "email already exists";
                    } else {
                        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                        $succes = $UserModel->createUser($username, $email, $hashed_password);
                    }
                }
            }
        }
    }
}
