<?php

/*
The validate class is meant to help validate
the content of forms where data entered have
curtain requirements/restrictions.
*/
class Validate {

  private $_passed = false,
          $_errors = array(),
          $_db = null;

  public function __construct() {
    $this->_db = DB::getInstance();
  }

  public function check($source, $items = array()) {
    foreach($items as $item => $rules) {
      foreach($rules as $rule => $rule_value) {

        // $value is the value passed in: justin123
        // source[$item]
        // item['username']
        // $item is the type of the value: username
        // $rule_value is the value of the rule: 'min'

        $value = $source[$item]; // Get the value entered by user.
        $item = escape($item); // Escape the input entered by user.

        if (isset($rules['inputname'])) {
          $inputname = $rules['inputname']; // Get the input name/type.
        }

        // If the rule is required and empty.
        if ($rule === 'required' && empty($value)) {
          $this->addError("{$inputname} is required.");
        } else if (!empty($value)) {
          switch ($rule) {
            case 'min':
              if (strlen($value) < $rule_value) {
                $this->addError("{$inputname} must be a minimum of {$rule_value} characters.");
              }
            break;
            case 'max':
              if (strlen($value) > $rule_value) {
                $this->addError("{$inputname} can be a maximum of {$rule_value} characters.");
              }
            break;
            case 'matches':
              if ($value != $source[$rule_value]) {
                $this->addError("{$rule_value} must match {$inputname}");
              }
            break;
            case 'unique':
              $check = $this->_db->get($rule_value, array($item, '=', $value));
              if($check->count()) {
                $this->addError("{$inputname} already exists.");
              }
            break;
          }
        }

      }
    }

    if(empty($this->_errors)) {
      $this->_passed = true;
    }

    return $this;
  }

  private function addError($error) {
    $this->_errors[] = $error;
  }

  public function errors() {
    return $this->_errors;
  }

  public function passed() {
    return $this->_passed;
  }
}

?>
