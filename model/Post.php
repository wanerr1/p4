<?php

class Post
{
    private $_ID;
    private $_chapter;
    private $_title;
    private $_content;
    private $_author;
    private $_date;

    //CONSTRUCTOR
    public function __construct($row)
    {
        $this->hydrate($row);
    }

    //HYDRATATION
    public function hydrate($row)
    {
        $this->setID($row['ID']);
        $this->setChapter($row['chapter']);
        $this->setTitle($row['title']);
        $this->setContent($row['content']);
        $this->setAuthor($row['author']);
        $this->setDate($row['date']);
    }

    //GETTERS
    public function ID()
    {
        return $this->_ID;
    }
    public function chapter()
    {
        return $this->_chapter;
    }
    public function title()
    {
        return $this->_title;
    }
    public function content()
    {
        return $this->_content;
    }
    public function author()
    {
        return $this->_author;
    }
    public function date()
    {
        return $this->_date;
    }
    //SETTERS
    public function setID($ID)
    {
        $this->_ID = $ID;
    }
    public function setChapter($chapter)
    {
        $this->_chapter = $chapter;
    }
    public function setTitle($title)
    {
        $this->_title = $title;
    }
    public function setContent($content)
    {
        $this->_content = $content;
    }
    public function setAuthor($author)
    {
        $this->_author = $author;
    }
    public function setDate($date)
    {
        $this->_date = $date;
    }
} 
