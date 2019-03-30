<?php
class Comment
{
    private $_ID;
    private $_postID;
    private $_author;
    private $_date;
    private $_content;

    public function __construct($row)
    {
        $this->hydrate($row);
    }
    public function hydrate($row)
    {
        $this->setID($row['ID']);
        $this->setPostID($row['postID']);
        $this->setAuthor($row['author']);
        $this->setDate($row['date']);
        $this->setContent($row['content']);
    }

    //GETTERS
    public function ID()
    {
        return $this->_ID;
    }
    public function postID()
    {
        return $this->_postID;
    }
    public function author()
    {
        return $this->_author;
    }
    public function date()
    {
        return $this->_date;
    }
    public function content()
    {
        return $this->_content;
    }
    //SETTERS
    public function setID($ID)
    {
        $this->_ID = $ID;
    }
    public function setPostID($postID)
    {
        $this->_chapter = $postID;
    }
    public function setAuthor($author)
    {
        $this->_author = $author;
    }
    public function setDate($date)
    {
        $this->_date = $date;
    }
    public function setContent($content)
    {
        $this->_content = $content;
    }
} 