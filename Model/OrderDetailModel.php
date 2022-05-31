<?php
include_once './Model/OrderDetail.php';
include_once './Model/Database.php';

class OrderDetailModel extends Database {


    public function __construct() {
        $this->connect();

    }

    public function find($id) {
        $sql = "select * from orders_details where id=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    
        $orders_detail = $stmt->fetch();
        return new OrderDetail(
            $orders_detail['id'],
            $orders_detail['orders_code'],
            $orders_detail['products_id'],
            $orders_detail['quantity'],
            
             
        );
    }

    public function all() {
        $sql = "select * from  orders_details";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $orders_detail = array();

        foreach($query as $order){
            $orders_detail[] = new OrderDetail(
            $orders_detail['id'],
            $orders_detail['orders_code'],
            $orders_detail['products_id'],
            $orders_detail['quantity'],
            
                 
            );
            
        }

        return $orders_detail;
    }
    public function delete($id){
        $sql = "delete from orders_details where id = " . $id;
        $this->pdo->exec($sql);
    }

    public function create($attr = array()) {
        $orders_code = $attr['orders_code'];
        $products_id = $attr['products_id'];
        $quantity = $attr['quantity'];
  
        $sql = "insert into orders_details(orders_code, products_id, quantity) values('$orders_code', $products_id, $quantity)";

        $this->pdo->exec($sql);
    }

    public function update($attr = array()) {
        $orders_detail = $attr['orders_details'];
        $products_id = $attr['products_id'];
        $quantity = $attr['quantity'];
         
        $sql = "insert into orders_details(orders_details, products_id, quantity  ) values('$orders_detail','$products_id','$quantity')";

        $this->pdo->exec($sql);
    }
    
    
}