<?php

class Person{
  const NAME = 'Person';
  
  public function myKind(){
    echo 'I am a ' . self::NAME . '. ';
  }
}