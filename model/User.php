<?php

class User
{
    private $_ID;
    private $_role;
    private $_login;
    private $_password;
    private $_email;
    private $_creationDate;

    //CONSTRUCTOR
    public function __construct($row)
    {
        $this->hydrate($row);
    }

    //HYDRATATION
    public function hydrate($row)
    {
        $this->setID($row['ID']);
        $this->setRole($row['role']);
        $this->setLogin($row['login']);
        $this->setPassword($row['password']);
        $this->setEmail($row['email']);
        $this->setCreationDate($row['creationDate']);
    }

    //GETTERS
    public function ID()
    {
        return $this->_ID;
    }
    public function role()
    {
        return $this->_role;
    }
    public function login()
    {
        return $this->_login;
    }
    public function password()
    {
        return $this->_password;
    }
    public function email()
    {
        return $this->_email;
    }
    public function creationDate()
    {
        return $this->_creationDate;
    }
    //SETTERS
    public function setID($ID)
    {
        $this->_ID = $ID;
    }
    public function setRole($role)
    {
        $this->_role = $role;
    }
    public function setLogin($login)
    {
        $this->_login = $login;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    public function setCreationDate($creationDate)
    {
        $this->_creationDate = $creationDate;
    }
} 
 
