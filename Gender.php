<?php

class Gender{
  
  public $_gender;
  public $_features = [];
  
  function __construct($gender) {
    if($gender == 'male'){
      $this->_gender = $gender;
      $this->_features = ['facial hair', 'ugly face', 'low voice'];
    }
    elseif($gender == 'female'){
      $this->_gender = $gender;
      $this->_features = ['long hair', 'clean pretty face', 'high voice'];
    }
    else{
      return 'Unrecognized gender';
    }
  }
  
  public function getFeatures(){
    return $this->_features;
  }
  
  public function myFeatures(){
    //array_unshift($this->_features, 'My features are');
    echo 'My features are '. implode(', ', $this->_features) . '. ';
    return;
  }
  
  public function myGender(){
    echo "My gender is {$this->_gender}. ";
    return;
  }
  
}
