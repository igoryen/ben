<?php
require_once './Person.php';

class Female extends Person{
  const SEX = 'female';
  
  public function myGender(){
    echo 'My gender is ' . self::SEX . '.<br/>';
  }
}