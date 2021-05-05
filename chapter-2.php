<?php

// 2.1. C

Class User {
    
    public $firstName;
    public $lastName;

    public function sayHello(){
        return "hello, " . $this->firstName . " " . $this->lastName;
    }

}

$user1 = new User;

$user1->firstName = "David";

echo $user1->sayHello();

echo "<br>";
echo "<br>";

$user2 = new User;
$user2->firstName = "Jonnie";
$user2->lastName = "Roe";

echo $user2->sayHello();

