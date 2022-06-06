<?php
include_once './Model/Database.php';
include_once './Model/User.php';
include_once './Model/InfoUserModel.php';

class Auth extends Database{

    public function __construct()
    {
        $this->connect();
    }

    public function user(){
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        return NULL;
    }

    public function login($name, $password){
        $sql = "select * from users where name=? and password=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name, $password]);
        $user = $stmt->fetch();
        if($user) {       
            unset($_SESSION['user']);
            $_SESSION['user'] = $user;

            //Set session infouser
            $infoUserModel = new InfoUserModel();
            $infoUser = $infoUserModel->findByUserId($user['id']);

            unset($_SESSION['infoUser']);
            $_SESSION['infoUser'] = array(
                'full_name' => $infoUser->full_name,
                'phone' => $infoUser->phone,
                'address' => $infoUser->address,
                'users_id' => $infoUser->users_id
            );

            if($user['role'] == 'admin') redirect(admin_url_pattern('categoryController', 'index'));     
        }else{
            redirect(url_pattern('authController', 'login'));
        }
    }

    public function register($name, $password, $full_name, $phone, $address){
        //check name is exist
        if($this->validating($phone)){
            $sql = "select * from users where name=? LIMIT 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name]);   
            $user = $stmt->fetch();

            $sql2 = "select * from info_users where phone=? LIMIT 1";
            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->execute([$phone]);   
            $phone = $stmt2->fetch();
            if($user ){
                //user name existed
                $_SESSION['errors'] = 'This account has already existed. Please choose another account name.';
                redirect(url_pattern('authController', 'login')); die();
            } else if($phone ){
                //user name existed
                $_SESSION['errors'] = 'This phone number already exists. Please enter another phone number.';
                redirect(url_pattern('authController', 'login')); die();
            } else {
            //Them moi user
                $sql = "insert into users(name, password, role) values('$name','$password', 'user')";
                $this->pdo->exec($sql);

                //Lay thong tin user vua insert vao database
                $sql = "select * from users where name=? LIMIT 1";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([$name]);
                $user = $stmt->fetch();
                //Them thong tin infouser
                $infoUserModel = new InfoUserModel();
                $infoUserModel->create(
                    array(
                        'full_name' => $full_name,
                        'phone' => $phone,
                        'address' => $address,
                        'users_id' => $user['id']
                    )
                );
            }      
        
        } 
       
    }
    public function validating($phone){
        if(preg_match('/^(0|\\+84)(\\s|\\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\\d)(\\s|\\.)?(\\d{3})(\\s|\\.)?(\\d{3})$/', $phone)) {
            return true;
        } else {
            return false;
        }
    }
    
   
}