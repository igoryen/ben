<?php

require_once './Person.php';

/**
 * Abstract class standing for the main things that unite all the Entaltsevs
 */
class Ent extends Person {

  const FAMILY_NAME = 'Entaltsev';
  const ANCESTRY = 'Russian';

  # does this one need a constructor 
  # for a personal name?

  public function myKind() {
    return parent::myKind();
  }

  public function getFamilyName() {
    return self::FAMILY_NAME;
  }

  public function getAncestry() {
    return self::ANCESTRY;
  }

  # This class is the abstract class so this function returns a string
  # Children will return this string also

  public function myAncestry() {
    echo "My ancestry is {$this->getAncestry()}. ";
    return;
  }

  public function myFamilyName() {
    echo "My family name is {$this->getFamilyName()}. ";
    return;
  }

}
