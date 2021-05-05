<?php


class User {

    private $firstName;
    private $lastName;

    public function __construct($placeHolderFirst = 'David', $placeHolderSecond = 'Moftakhar')
    {
        $this->firstName = $placeHolderFirst; 
        $this->lastName = $placeHolderSecond;   
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function testOutput()
    {
        return "output tested";
    }

}

$user2 = new User;
echo $user2->getFullName();

$user1 = new User('John', 'Doe');
Hoecho $user1->getFullName();
// echo $user1->testOutput();



