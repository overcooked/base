<?php
/**
 * The register controller is used to
 * register a new user.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// Check if user is logged in.
$user->logged_in_redirect();

if (Input::exists() && Token::check(Input::get('token'))) {
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
    'user_first' => array(
      'field_name' => 'First name',
      'required' => true,
      'min' => 2,
      'max' => 50,
      'alpha' => true
    ),
    'user_last' => array(
      'field_name' => 'Last name',
      'required' => true,
      'min' => 2,
      'max' => 50,
      'alpha' => true
    ),
    'user_email' => array(
      'field_name' => 'Email',
      'required' => true,
      'max' => 255,
      'unique' => 'users'
    ),
    'user_password' => array(
      'field_name' => 'Password',
      'required' => true,
      'min' => 6,
      'max' => 64
    ),
    'password_again' => array(
      'field_name' => 'Password again',
      'required' => true,
      'matches' => 'user_password'
    )
  ));

    if ($validation->passed()) {
        $user = new User();
        $salt = Hash::salt(32);

    // Create a unique post ID.
    $user_id = uniqid('user_');

        try {

      // Try creating a new user.
      $user->create(array(
        'user_id' => $user_id,
        'user_first' => Input::get('user_first'),
        'user_last' => Input::get('user_last'),
        'user_email' => Input::get('user_email'),
        'user_password' => Hash::make(Input::get('user_password'), $salt),
        'user_salt' => $salt,
        'user_join_date' => date('Y-m-d H:i:s')
      ));

      // Log the user in.
      $user->login(Input::get('user_email'), Input::get('user_password'));

      // Create row inside the users_profile details.
      DB::getInstance()->insert('users_profile', array(
        'user_id' => $user_id
      ));

            Redirect::to('index.php');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } else {
        foreach ($validation->errors() as $error) {
            echo $error . '<br>';
        }
    }
}
