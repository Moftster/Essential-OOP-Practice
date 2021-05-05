<?php


// 4.1 D

class User {

    private $firstName;

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }
}

$user1 = new User;

$user1->setFirstName('Joe');

echo $user1->getFirstName();
$user1->getFirstName();


