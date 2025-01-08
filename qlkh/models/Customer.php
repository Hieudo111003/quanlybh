<?php
class Customer {
    public $id;
    public $name;
    public $email;
    public $address;

    public function __construct($id, $name, $email, $address) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}
?>
