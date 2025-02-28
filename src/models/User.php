<?php
require_once("./Base.php");

Class UserModel extends BaseModel{
    public $name;
    public $email;  
    public $password;

    public function __construct($name , $email,$password) {
        parent::__construct();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    function  save() {
        var_dump($this->conn->exec("select * from users"));
    }
}