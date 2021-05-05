<!-- 1.1 A -->
<!-- 1.2 A -->
<!-- 1.3 B -->
<!-- 1.4 A -->

<!-- 1.5 -->
<?php 

Class User {

    public $firstName;
    public $lastName;

    public function sayHello(){
        echo "Hello!" . $this->firstName . " " . $this->lastName;
    }
}

$user1 = new User;

$user1->firstName = 'John';
$user1->lastName = 'Doe';

echo $user1->firstName;
echo $user1->lastName;
echo "<br>";
echo $user1->sayHello();

echo "<br>";
echo "<br>";
echo "<br>";

$user2 = new User;
$user2->firstName = 'Jane';
$user2->lastName = 'Doe';

echo $user2->firstName;
echo $user2->lastName;
echo "<br>";
echo $user2->sayHello();
