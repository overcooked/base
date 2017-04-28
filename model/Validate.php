<?php
/**
 * Validate class is used to validate form input.
 * @author Team Point.
 * @version 2.0
 */
class Validate {

  /** True if validation passed, false if not. */
  private $_passed = false;

  /** Holds the validation errors. (Password min 'n' characters)*/
  private $_errors = array();

  /** Holds the DB object. */
  private $_db = null;

  /**
   * Constructor for validation sets the
   * database object into the _db variable.
   */
  public function __construct() {
    $this->_db = DB::getInstance();
  }

  /**
   * Validates input form values against provided rules.
   * @param  array  $input      - Input form values.
   * @param  array  $form_rule  - Rules of validation.
   * @return Validate           - Returns a validation object.
   */
  public function check($input, $form_rule = array()) {

    /* - Passed In Array Structure -
        [$form_rule][0] -> 'password' => array('field_name' => 'Password') <- [$rules][0]
        [$form_rule][1] -> 'email' => array('field_name' => 'Email') <- [$rules][1]
                          [$form_name]           [$rule]      [$rule_value]
     */

    // Loop through each rule, and check if it passes validation.
    foreach($form_rule as $form_name => $rules) {
      foreach($rules as $rule => $rule_value) {

        // Get the form input.
        $value = $input[$form_name];

        // Get rules for a specific field.
        $field_name = $rules['field_name'];

        // If the rule is required and empty.
        if ($rule === 'required' && empty($value)) {
          $this->add_error("{$field_name} is required.");
        }

        // If the values aren't empty, check them.
        if (!empty($value)) {

          // Checks for minimum input string length.
          if ($rule === 'min' && strlen($value) < $rule_value) {
            $this->add_error("{$field_name} must be a minimum of {$rule_value} characters.");
            continue;
          }

          // Checks for maximum input string length.
          if ($rule === 'max' && strlen($value) > $rule_value) {
            $this->add_error("{$field_name} can be a maximum of {$rule_value} characters.");
            continue;
          }

          // Checks if two field match or not.
          if ($rule === 'matches' && $value != $input[$rule_value]) {
            $this->add_error("{$rule_value} must match {$field_name}");
          }

          // Checks if the value is unique within the database.
          if ($rule === 'unique') {
            $check = $this->_db->get($rule_value, array($form_name, '=', $value));
            if($check->count()) {
              $this->add_error("Please use a different email.");
            }
            continue;
          }
        }

      }
    }

    // If there were no errors, pass the validation.
    if(empty($this->_errors)) {
      $this->_passed = true;
    }

    // Return the validation object.
    return $this;
  }

  /**
   * Adds any validation errors to _error array.
   * @param String $error  - Error message.
   */
  private function add_error($error) {
    $this->_errors[] = $error;
  }

  /**
   * Returns the array that holds the validation errors.
   * @return array - Returns member _error array.
   */
  public function errors() {
    return $this->_errors;
  }

  /**
   * Returns whether the validation passed or not.
   * @return boolean - True if validation passed, false if not.
   */
  public function passed() {
    return $this->_passed;
  }

}

?>
