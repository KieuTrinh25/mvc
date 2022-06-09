<?php
include_once './Model/Category.php';
include_once './Model/Database.php';

class CategoryModel extends Database {

    public function __construct() {
        $this->connect();
    }

    public function find($id) {
        $sql = "select * from categories where id=:id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        $category = $stmt->fetch();
        return new Category(
            $category['id'],
            $category['name'],
            $category['description']
        );
    }

    public function all() {
        $sql = "select * from categories";
        $query = $this->pdo->prepare($sql);
        $query->execute();

        $categories = array();

        foreach($query as $category){
            $categories[] = new Category(
                $category['id'],
                $category['name'],
                $category['description']
            );
        }

        return $categories;
    }

    public function delete($id){
        $sql = "delete from categories where id=:id " ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function create($attr = array()) {
        $name = $attr['name'];
        $description = $attr['description'];

        $sql = "insert into categories(name, description) values(:name, :description)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
         
        $stmt->execute();
    }

    public function update($attr = array()) {
        $name = $attr['name'];
        $description = $attr['description'];
        $id = $attr['id'];
        $sql ="UPDATE categories set name=:name, description=:description where id=:id" ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":desciption", $description);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    
}