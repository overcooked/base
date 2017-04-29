<?php
/**
 * The User class is used to login, logout, create,
 * and control the functionality that a user has.
 * @author Team Point.
 * @version 1.0
 */
class User {

  /** The DB instance used for the current user. */
  private $_db;

  /** The data the user has. (Email, password, name) */
  private $_data;

  /** The session variable name taken from config. */
  private $_session_name;

  /** The cookie variable name taken from config. */
  private $_cookie_name;

  /** True if a user is logged in, false if not. */
  private $_logged_in = false;

  /**
   * Constructor for the User class. Has ability to
   * create a user if passed in a valid user ID number.
   * @param int $user - User ID to create a specific user.
   */
  public function __construct($user_id = null) {

    // Save the current database instance.
    $this->_db = DB::getInstance();

    // Save the set global session and cookie name.
    $this->_session_name = Config::get('session/session_name');
    $this->_cookie_name = Config::get('remember/cookie_name');

    // If no parameter passed in and a user session exists.
    if(!$user_id && Session::exists($this->_session_name)) {

      // Save session value which is also the ID of the logged in user.
      $user_id = Session::get($this->_session_name);

      // If the user exists, set logged in to true.
      if($this->find($user_id)) {
        $this->_logged_in = true;
      }
    } else {
      // Find and set the current user given the user ID.
      $this->find($user_id);
    }
  }

  /**
   * Inserts a new user into the users table.
   * @param  array  $fields - Users information. (Name, Password, Email)
   * @throws Exception      - Throw exception if insertion failed.
   */
  public function create($fields = array()) {
    if(!$this->_db->insert('users', $fields)) {
      throw new Exception('There was a problem creating an account.');
    }
  }

  /**
   * Finds a user based on their user ID or email.
   * @param  int $user - The user ID number.
   * @return boolean   - True if user is found, false if not.
   */
  public function find($user) {

    // Choose whether to check id or email.
    $field = (is_numeric($user)) ? 'user_id' : 'user_email';

    // Search for user in database.
    $data = $this->_db->get('users', array($field, '=', $user));

    // If user exists, save data into current user object.
    if($data->count()) {
      $this->_data = $data->results()[0];
      return true;
    }

    // If no user was found, return false.
    return false;
  }

  /**
   * Login a user with a email and password. Also,
   * it saves a cookie to remember a logged in user.
   * @param  String $email - The input form email value.
   * @param  String $password - The input form password value.
   * @return Boolean          - True if successful login, false if not.
   */
  public function login($email = null, $password = null) {

    // If user exists, and password/email is null.
    if(!$email && !$password && $this->exists()) {
      // Set the current session to be for this user (Log them in.)
      Session::set($this->_session_name, $this->data()->user_id);
      return true;
    }

    // If email exists in database.
    if($this->find($email)) {

      // If the password is correct.
      if($this->data()->user_password === Hash::make($password, $this->data()->user_salt)) {

        // Set the current session to be for this user (Log them in.)
        Session::set($this->_session_name, $this->data()->user_id);

        // Generate a unique hash.
        $hash = Hash::unique();

        // If the user has a cookie saved before.
        $hash_check = $this->_db->get('users_session', array('user_id', '=', $this->data()->user_id));

        // If no previous cookies were found, insert a new one.
        if(!$hash_check->count()) {
          $this->_db->insert('users_session', array(
            'user_id' => $this->data()->user_id,
            'session_hash' => $hash
          ));
        } else {
          // If the cookie exists, save that cookie again.
          $hash = $hash_check->results()[0]->hash;
        }

        // Save the cookie as the current cookie.
        Cookie::set($this->_cookie_name, $hash, Config::get('remember/cookie_expiry'));
        return true;
      }
    }

    // Login failed, return false.
    return false;
  }

  /**
   * Updates a users information given the fields.
   * @param  array  $fields - The fields and values to be updated.
   * @throws exception      - Problem updating the information.
   */
  public function update($fields = array()) {
    if(!$this->_db->update('users', $this->data()->user_id, $fields)) {
      throw new Exception("There Was A Problem Updating");
    }
  }

  /**
   * Returns the users data. (Email, password, name)
   * @return array - Containing current users data.
   */
  public function data() {
    return $this->_data;
  }

  /**
   * Checks if user exists by checking if user data is empty.
   * @return boolean - True if user exists, false if not.
   */
  public function exists() {
    return (!empty($this->_data)) ? true : false;
  }

  /**
   * Logout a user by deleting the session and cookie.
   * @return void
   */
  public function logout() {
    // Remove the cookie from the database.
    $this->_db->delete('users_session', array('user_id', '=', $this->data()->user_id));

    // Delete the current session and cookie.
    Session::delete($this->_session_name);
    Cookie::delete($this->_cookie_name);
  }

  /**
   * Checks whether a user is logged in.
   * @return boolean - True if logged in, false if not.
   */
  public function is_logged_in() {
    return $this->_logged_in;
  }

  /**
   * Checks whether a user is logged in. If so,
   * redirect a user to the homepage.
   * @return void
   */
  public function logged_in_redirect() {
    if($this->_logged_in) {
      Redirect::to('index.php');
    }
  }

  /**
   * Checks if a user isn't logged in. If not
   * logged in, redirect the user to the homepage.
   * @return void
   */
  public function not_logged_in_redirect() {
    if(!$this->_logged_in) {
      Redirect::to('index.php');
    }
  }

}

?>
