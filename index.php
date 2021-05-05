<?php

// 13.1 C 

// 13.2 D

// 13.3 No 

interface User {

}

Class Author implements User {
    use Writing;

    public function writeContent()
    {
        return "Commentator, please start typing you comment...";
    }
}

Class Commentator implements User {

}

Class Viewer implements User {

}

trait Writing {
    abstract public function writeContent();
}

$author = new Author;
echo $author->writeContent();