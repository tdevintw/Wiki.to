<?php 
namespace App\Model;

use PDO;
use PDOException;

    class UserModel extends BaseModel{

        public function isUsernameTaken($email){
            try{
                $query = "SELECT COUNT(*) FROM users WHERE email = :email";
                $stmt = $this->db->prepare($query);
                $stmt->bindParam(':email',$email,PDO::PARAM_STR);
                $stmt->execute();
                
                return $stmt->fetchColumn() > 0 ;
                
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
        }

        public function createUser($username ,$email,$hashed_password){
            try{
            $query = "INSERT INTO users (username , email , hashed_password ) VALUES(:username,:email,:hashed_password)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':username',$username,PDO::PARAM_STR);
            $stmt->bindParam(':email',$email,PDO::PARAM_STR);
            $stmt->bindParam(':hashed_password',$hashedpassword,PDO::PARAM_STR);
            $stmt->execute();

            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }
    }