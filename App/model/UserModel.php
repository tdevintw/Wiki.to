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
            $stmt->bindParam(':hashed_password',$hashed_password,PDO::PARAM_STR);
            $stmt->execute();
            
            // Fetch the user record immediately after inserting it
            $query = "SELECT id FROM users WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return  $user['id'];
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
        }

        public function logIn($email)
        {
            try {
                $query = "SELECT * FROM users WHERE email = :email";
                $stmt = $this->db->prepare($query);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->execute();
    
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addRole($id ,$role_id){

            try {
                $query = "INSERT INTO users_roles (user_id,role_id) VALUES(:id , :role_id)";
                $stmt = $this->db->prepare($query);
                $stmt->bindParam(':id', $id, PDO::PARAM_STR);
                $stmt->bindParam(':role_id', $role_id, PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        }

        
    }