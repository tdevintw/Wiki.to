<?php

namespace App\Controller;

use App\Model\UserModel;

// use app\Controller\BaseController;
class SignupController extends BaseController
{

    private $errors = [];

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->signUp();
        }

        $result = $this->show('Signup', ['errors' => $this->errors]);

        // Return the result
        return $result;
    }

    public function signUp()
    {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $repeat_password = $_POST['repeat_password'];

            if (empty($username) || empty($password) || empty($email) || empty($repeat_password)) {
                $this->errors['fill_all'] =  "fill all the inputs";
            } elseif ($password != $repeat_password) {
                 
                    $this->errors['password_incorect'] =  "confirmpassword is not correct";
                }else{
                    $UserModel = new UserModel();

                    if ($UserModel->isUsernameTaken($email)) {
                        $this->errors['already_exist'] = "email already exists";
                    } else {
                        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                        $user_id = $UserModel->createUser($username, $email, $hashed_password);
                        $this->errors['succes'] = "signup succcessed login now!";
                        $role_id = '1';
                        $UserModel->addRole($user_id,$role_id);

                        header("Location: Login");
                    }
                }
            }
    }
