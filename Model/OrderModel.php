<?php
include_once './Model/Order.php';
include_once './Model/Database.php';

class OrderModel extends Database {


    public function __construct() {
        $this->connect();

    }

    public function find($id) {
        $sql = "select * from orders where id=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    
        $order = $stmt->fetch();
        return new Order(
            $order['id'],
            $order['code'],
            $order['description'],
            $order['users_id'],
            $order['created_at']
             
        );
    }

    public function all() {
        $sql = "select * from orders";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $orders = array();

        foreach($query as $order){
            $orders[] = new Order(
                $order['id'],
                $order['code'],
                $order['description'],
                $order['users_id'],
                $order['created_at']
                 
            );
            
        }

        return $orders;
    }
    public function delete($id){
        $sql = "delete from orders where id = " . $id;
        $this->pdo->exec($sql);
    }

    public function create($attr = array()) {
        $code = $attr['code'];
        $description = $attr['description'];
        $users_id = $attr['users_id'];
  
        $sql = "insert into orders(code, description, users_id) values('$code','$description', $users_id)";

        $this->pdo->exec($sql);
    }

    public function update($attr = array()) {
        $code = $attr['code'];
        $description = $attr['description'];
        $users_id = $attr['users_id'];
  
        $sql = "insert into orders values('$code','$description',$users_id )";

        var_dump($sql);
        
        $this->pdo->exec($sql);
    }
    
    
}