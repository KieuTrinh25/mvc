<?php
include_once './Model/Product.php';
include_once './Model/Database.php';

class ProductModel extends Database {

    public function __construct() {
        $this->connect();
    }

    public function find($id) {
        $sql = "select * from products where id=:id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        $product = $stmt->fetch();
        return new Product(
            $product['id'],
            $product['name'],
            $product['price'],
            $product['quantity'],
            $product['image']
        );
    }

    public function all() {
        $sql = "select * from products";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        
        $products = array();

        foreach($query as $product){
            $products[] = new Product(
                $product['id'],
                $product['name'],
                $product['price'],
                $product['quantity'],
                $product['image']
            );
        }

        return $products;
    }
    public function delete($id){
        $sql = "delete from products where id=:id " . $id;
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $this->pdo->exec();
    }

    public function create($attr = array()) {
        $name = $attr['name'];
        $price = $attr['price'];
        $quantity = $attr['quantity'];
        $image = $attr['image'];

        $sql = "insert into products(name, price, quantity, image) values( :name, :price, :quantity, :image)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":quantity", $quantity);
        $stmt->bindParam(":image", $image);
        
        $stmt->execute();
    }

    public function update($attr = array()) {
        $name = $attr['name'];
        $price = $attr['price'];
        $quantity = $attr['quantity'];
        $image = $attr['image'];
        $id = $attr['id'];
        
        $sql ="UPDATE products set name=:$name, price=:$price, quantity:$quantity, image:$image'  where id=:id" ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":quantity", $quantity);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }
    public function findByName($name){
        $sql = "select * from products where name like '%$name%'";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    
        $products = array();
    
        foreach($query as $product){
            $products[] = new Product(
                $product['id'],
                $product['name'],
                $product['price'],
                $product['quantity'],
                $product['image']
            );
        }
    
        return $products;
    }
    
    
}