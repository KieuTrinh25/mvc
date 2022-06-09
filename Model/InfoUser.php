<?php
class InfoUser {
    public $id;
    public $full_name;
    public $address;
    public $users_id;

    public function __construct($id,  $full_name, $address , $users_id) {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->address = $address;
        $this->users_id = $users_id;
    }
}