<?php

abstract class Person{
  const NAME = 'Human';
  
  /**
   * Says I am human
   */
  public function myKind(){
    echo 'I am ' . self::NAME . '. ';
  }
}