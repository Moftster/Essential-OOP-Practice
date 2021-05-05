<?php

// 11.1

interface User 
{
    public function setGender(bool $isMale);
    public function getGender();
    
    public function setUsername($username);
    public function getUsername();

}

Class Commentator implements User
{
    protected $gender;
    protected $username;
    
    public function setGender(bool $isMale)
    {
        if($isMale) {
            $this->gender = "Male";
        } else {
            $this->gender = "Female";
        }
    }
    public function getGender()
    {
        return $this->gender;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
} 

function mrOrMrs (User $user){
    if($user->getGender() == "Male"){
        return "Mr " . $user->getUsername();
    } else {
        return "Mrs " . $user->getUsername();
    }
}

$maleUser = new Commentator;
$maleUser->setGender(true);
$maleUser->setUserName('Bob');

echo mrOrMrs($maleUser);

$femaleUser = new Commentator;
$femaleUser->setGender(false);
$femaleUser->setUserName('Jane');

echo mrOrMrs($femaleUser);

