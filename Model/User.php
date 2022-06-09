<?php
class User {
    public $id;
    public $phone;
    public $password;
    public $role;

    public function __construct($id,  $phone, $password , $role) {
        $this->id = $id;
        $this->phone = $phone;
        $this->password = $password;
        $this->role = $role;
    }
}