<?php
require_once './Person.php';

class Female extends Person{
  const SEX = 'female';
  
  public function mySex(){
    echo 'I am ' . self::SEX . '. ';
  }
}