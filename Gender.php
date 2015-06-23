<?php

class Gender {

  public $_gender;
  public $_features = [];

  function __construct($gender) {
    try {
      if ($gender == 'male') {
        $this->_gender = $gender;
        $this->_features = ['facial hair', 'ugly face', 'low voice'];
      }
      elseif ($gender == 'female') {
        $this->_gender = $gender;
        $this->_features = ['long hair', 'clean pretty face', 'high voice'];
      }
      else {
        throw new Exception('Unrecognized gender: "' . $gender . '"');
      }
    } catch (Exception $e) {
      echo 'Oops! Caught exception: ', $e->getMessage(), "\n";
    }
  }

  public function getFeatures() {
    return $this->_features;
  }

  public function myFeatures() {
    echo 'My features are ' . implode(', ', $this->_features) . '. ';
    return;
  }

  public function myGender() {
    echo "My gender is {$this->_gender}. ";
    return;
  }

}
