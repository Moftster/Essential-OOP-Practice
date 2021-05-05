<?php


Class User {
    
    public $firstName;

    public function sayHello(){
        echo "hello, " . $this->firstName;
        return $this;
    }

    public function register(){
        echo " >> registered";
        return $this;
    }

    public function mail(){
        return " >> email sent";
        // return $this;
    }

}

$user1 = new User;

$user1->firstName = "Jane";

echo $user1->sayHello()->register()->mail();
echo "<br>";
echo "<br>";
// echo $user1->register();
// echo "<br>";
// echo "<br>";
// echo $user1->mail();
echo "<br>";
echo "<br>";


