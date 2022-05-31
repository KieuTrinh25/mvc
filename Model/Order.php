<?php
class Order {
    public $id;
    public $code;
    public $description;
    public $users_id;
    public $created_at;
  

    public function __construct($id, $code, $description, $users_id, $created_at) {
        $this->id = $id;
        $this->code = $code;
        $this->description = $description;
        $this->users_id = $users_id;
        $this->created_at = $created_at;
      
    }
}