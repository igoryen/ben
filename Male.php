<?php
require_once './Person.php';

class Male extends Person{
  const SEX = 'male';
  public $_name;
  
  function __construct($name) {
    $this->_name = $name;
  }
  
  public function mySex(){
    echo 'I am ' . self::SEX . ', hooah! ';
  }
  
  public function myName(){
    echo 'My name is ' . $this->_name .'. ';
  }
  
  public function myKind(){
    return parent::myKind();
  }
}