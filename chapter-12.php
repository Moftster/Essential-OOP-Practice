<?php

// 9.1. A

abstract Class User  
{
    protected $scores = 0;
    protected $numberOfArticles = 0;

    public function setNumberOfArticles($int){
        $this->numberOfArticles = $int;
    }

    public function getNumberOfArticles(){
        return $this->numberOfArticles;
    }

    abstract public function calcScores();
}

Class Author extends User 
{
    public function calcScores(){
        return $this->numberOfArticles * 10 + 20;
    }
}

Class Editor extends User 
{
    public function calcScores(){
        return $this->numberOfArticles * 5 + 15;
    }
}

$author1 = new Author;
$author1->setNumberOfArticles(8);
echo $author1->calcScores();

$editor1 = new Editor;
$editor1->setNumberOfArticles(15);
echo $editor1->calcScores();