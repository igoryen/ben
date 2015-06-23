<?php
require_once './Person.php';

class Male extends Person{
  const SEX = 'male';
  public $_name;
  
  /**
   * Constructor: initialize $_name
   * @param string $name
   */
  function __construct($name) {
    $this->_name = $name;
  }
  
  /**
   * Says "My gender is male"
   */
  public function myGender(){
    echo 'My gender is ' . self::SEX . '. ';
  }
  
  /**
   * Says "My name is $_name"
   */
  public function myName(){
    echo 'My name is ' . $this->_name . '. ';
  }
  
  /**
   * Return parent::myKind()
   * @return type
   */
  public function myKind(){
    return parent::myKind();
  }
}