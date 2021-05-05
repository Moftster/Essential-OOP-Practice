<?php

// 8.1. D

// 8.2. D

// 8.3. A

// 8.4. E

Class User {

    protected $username;

    public function setUsername($name)
    {
        $this->username = $name;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

interface Author {

    public function setAuthorPrivileges($authorArray);

    public function getAuthorPrivileges();
}

interface Editor {
    
    public function setEditorPrivileges($editorArray);

    public function getEditorPrivileges();
}

Class AuthorEditor extends User implements Author, Editor {
    
    protected $authorArray;
    protected $editorArray;

    public function setAuthorPrivileges($authorArray)
    {
        $this->authorArray = $authorArray;
    }

    public function getAuthorPrivileges()
    {
        return $this->authorArray;
    }

    public function getEditorPrivileges()
    {
        return $this->editorArray;
    }

    public function setEditorPrivileges($editorArray)
    {
        $this->editorArray = $editorArray;
    }
}

$user1 = new AuthorEditor;

$user1->setUserName('Balthazar');
// echo $user1->getUsername();

$user1->setAuthorPrivileges(['write text', 'add punctuation']);
// print_r($user1->getAuthorPrivileges());
$user1->setEditorPrivileges(['edit text', 'edit punctuation']);

$userName = $user1->getUsername();
$userPriviledges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());

echo $userName . " has the following priviledges: ";
foreach($userPriviledges as $priviledge){
    echo " {$priviledge}, ";
}

echo ".";
