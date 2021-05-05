<?php

// 6.1. B

// 6.2. B

Class User {
    
    protected $username;

    public function setUserName($username)
    {
        return $this->username = $username;
    }
}

Class Admin extends User {

    public function expressYourRole()
    {
        return __CLASS__;
    }

    public function sayHello()
    {
        return "Hello admin, " . $this->username;
    }

}

$admin1 = new Admin;

$admin1->setUserName('Balthazar');

echo $admin1->sayHello();
echo $admin1->expressYourRole();

