<?php

require_once './Nick.php';

class SonOfNick extends Nick{
  public $_name;
  
  /**
   * Constructor: initializes $_name
   * @param string $name
   */
//  function __construct($name) {
//    $this->_name = $name;
//  }
  
  /**
   * Says "My first name is $_name"
   */
  public function MyFirstName() {
    echo "My first name is {$this->_name}. ";
  }
  
  /**
   * Says "My dad's name is ...
   */
  public function MyDad(){
    echo "My dad's name is ". parent::getName();
  }
  
  /**
   * Return parent::myKind
   * @return type
   */
  public function myKind(){
    return parent::myKind();
  }
}