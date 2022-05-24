<?php
include_once './Model/Product.php';
include_once './Model/Database.php';

class ProductModel extends Database {

    public function __construct() {
        $this->connect();
    }

    public function find($id) {
        $sql = "select * from products where id=? LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    
        $product = $stmt->fetch();
        return new Product(
            $product['name'],
            $product['description'],
            $product['price']
        );
    }

    public function all() {
        $sql = "select * from products";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $products = array();

        foreach($query as $product){
            $products[] = new Product(
                $product['name'],
                $product['price']
            );
        }

        return $products;
    }
}