<?php

// 9.1. A

abstract class User 
{
    protected $scores = 0;
    protected $numberOfArticles = 0;
    
    abstract protected function setNumberOfArticles($int);

    abstract protected function getNumberOfArticles();

    abstract protected function calcScores();
}

Class Author extends User 
{
    protected $scores;
    protected $numberOfArticles;

    public function setNumberOfArticles($int)
    {
        $this->numberOfArticles = $int; 
    }

    public function getNumberOfArticles()
    {
        return $this->numberOfArticles;
    }

    public function calcScores() {
        return $this->scores = $this->numberOfArticles * 10 + 20;
    }
}

Class Editor extends User 
{
    protected $scores;
    protected $numberOfArticles;

    public function setNumberOfArticles($int)
    {
        $this->numberOfArticles = $int; 
    }

    public function getNumberOfArticles()
    {
        return $this->numberOfArticles;
    }
    
    public function calcScores(){
        return $this->numberOfArticles * 6 + 15;
    }
}

$author1 = new Author;
$author1->setNumberOfArticles(8);
echo $author1->calcScores();

$editor1 = new Editor;
$editor1->setNumberOfArticles(15);
echo $editor1->calcScores();