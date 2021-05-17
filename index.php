<?php

interface Authors
{
    public function getName();
    public function setName($name);
}

class Article {
    protected $title;
    protected $author;

    public function __construct($title, Authors $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

class Author implements Authors {
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

$author1 = new Author;
$author1->setName('Joe');

$article1 = new Article('To PHP and Beyond', $author1);

echo $article1->getTitle() . ' by ' . $article1->getAuthor()->getName();
