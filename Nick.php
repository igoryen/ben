<?php
require_once './Male.php';

class Nick extends EntGen5{
  const FIRST_NAME = 'Nikolay';
  const BIRTH_PLACE = 'Donbass';
  
  
  public function getFirstName(){
    return self::FIRST_NAME;
  }
  
  public function getBirthPlace(){
    return self::BIRTH_PLACE;
  }
  
  public function myKind(){
    return parent::myKind();
  }
  
}