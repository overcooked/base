<?php
/**
  * The User class.
  */
class User {

  private $_db;
  private $_data;
  private $_session_name;
  private $_logged_in;

  public function __construct($user = null) {
    $this->_db = DB::getInstance();
    $this->_session_name = Config::get('session/session_name');

    if(!$user) {
      if(Session::exists($this->_session_name)) {
        $user = Session::get($this->_session_name);

        if($this->find($user)) {
          $this->_logged_in = true;
        } else {
          // process logout
        }
      }
    } else {
      $this->find($user);
    }
  }

  public function create($fields = array()) {
    if(!$this->_db->insert('users', $fields)) {
      throw new Exception('There was a problem creating an account.');
    }
  }

  public function find($user = null) {
    if($user) {
      $field = (is_numeric($user)) ? 'id' : 'username';
      $data = $this->_db->get('users', array($field, '=', $user));

      if($data->count()) {
        $this->_data = $data->results()[0];
        return true;
      }
    }

    return false;
  }

  public function data() {
    return $this->_data;
  }

  public function login($username = null, $password = null) {
    if($this->find($username)) {
      if($this->data()->password === Hash::make($password, $this->data()->salt)) {
        Session::set($this->_session_name, $this->data()->id);
        return true;
      }
    }
    return false;
  }

  public function logout() {
    Session::delete($this->_session_name);
  }

  public function isLoggedIn() {
    return $this->_logged_in;
  }

}

?>
