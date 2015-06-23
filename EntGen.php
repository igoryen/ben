<?php

require_once './Ent.php';
require_once './Gender.php';
;

class EntGen extends Ent {

  public $_fname;
  public $_genNum;
  public $_epoch;
  public $_gender;

  /**
   * EntGen = Entaltsev Generation
   * a representative of a generation of the Entaltsev line
   * @param type $fname
   * @param type $genNum
   * @param type $epoch
   */
  function __construct($fname, $genNum, $epoch, $gender) {
    $this->_fname = $fname;
    $this->_genNum = $genNum;
    $this->_epoch = $epoch;
    $this->_gender = new Gender($gender);
  }

  ########################################
  # getters
  /**
   * Return the generation number
   * @return type
   */

  public function getGeneration() {
    return $this->_genNum;
  }

  public function getEpoch() {
    return $this->_epoch;
  }

  public function getKind() {
    return parent::myKind();
  }

  ########################################
  # parent access 

  public function myAncestry() {
    return parent::myAncestry();
  }

  public function myFamilyName() {
    return parent::myFamilyName();
  }

  ########################################
  # own

  public function myFirstName() {
    echo "My first name is {$this->_fname}.";
    return;
  }

  public function myEpoch() {
    echo "My epoch is {$this->getEpoch()}. ";
    return;
  }

  public function myGeneration() {
    echo "My generation number is {$this->getGeneration()}. ";
    return;
  }

  public function myGender() {
    $this->_gender->myGender();
    return;
  }
  
  public function myFeatures() {
    $this->_gender->myFeatures();
    return;
  }

}
