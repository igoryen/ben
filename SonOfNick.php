<?php

require_once './Nick.php';

class SonOfNick{
  private $_name;
  
  function __construct($name) {
    $this->_name = $name;
  }
  
  public function MyFirstName() {
    echo $this->_name;
  }
  
  public function MyDad(){
    echo "My dad's name is " . parent::getName();
  }
  
  public function myKind(){
    return parent::myKind();
  }
}