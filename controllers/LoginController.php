<?php
/**
 * The login controller is used to
 * login a signed out user.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();

// If user is logged in, redirect them to index.
$user->logged_in_redirect();

// Checks to see if a token exists.
if (Input::exists() && Token::check(Input::get('token'))) {
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
    'user_email' => array('field_name' => 'Email', 'required' => true ),
    'user_password' => array('field_name' => 'Password', 'required' => true)
  ));

    if ($validation->passed()) {
        if ($user->login(Input::get('user_email'), Input::get('user_password'))) {
            Redirect::to('index.php');
        } else {
            Session::flash('login_failed', 'Incorrect Login Details.');
            Redirect::to('login.php');
        }
    } else {
        Session::flash('form_errors', $validation->errors());
    }
}
