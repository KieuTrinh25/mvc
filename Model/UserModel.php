<?php
include_once './Model/User.php';
include_once './Model/Database.php';

class UserModel extends Database {

    public function __construct() {
        $this->connect();
    }

    public function find($id) {
        $sql = "select * from users where id=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    
        $user = $stmt->fetch();
        return new User(
            $user['id'],
            $user['info_users_name'],
            $user['password'],
            $user['role']
        );
    }

    public function all() {
        $sql = "select * from users";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $users = array();

        foreach($query as $user){
            $users[] = new User(
                $user['id'],
                $user['info_users_name'],
                $user['password'],
                $user['role']
            );
        }

        return $users;
    }

    public function delete($id){
        $sql = "delete from users where id = " . $id;
        $this->pdo->exec($sql);
    }

    public function create($attr = array()) {
        $info_users_name = $attr['info_users_name'];
        $password = $attr['password'];
        $role = $attr['role'];
        $sql = "insert into users(info_users_name, password, role) values('$info_users_name','$password', '$role)";

        $this->pdo->exec($sql);
    }

    public function update($attr = array()) {
        $info_users_name = $attr['info_users_name'];
        $password = $attr['password'];
        $role = $attr['role'];
        $sql ="UPDATE users set info_users_name= '$info_users_name', password= '$password', role='$role where id=" . $attr['id'];
        var_dump($sql);
        
        $this->pdo->exec($sql);
    }
    
}