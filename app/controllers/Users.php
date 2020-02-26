<?php


class Users extends Controller
{
  public function login(){
    $this->view('users/login');
  }

  public function register(){
    // check post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // process form
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // init data
      $data = array(
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'pass' => trim($_POST['pass']),
        'pass2' => trim($_POST['pass2']),
        'name_err' => '',
        'email_err' => '',
        'pass_err' => '',
        'pass2_err' => ''
      );
      // validate name
      if(empty($data['name'])){
        $data['name_err'] = 'Please enter the name';
      }
      // validate email
      if(empty($data['email'])){
        $data['email_err'] = 'Please enter the Email';
      }
      // validate pass
      if(empty($data['pass'])){
        $data['pass_err'] = 'Please enter the Password';
      }
      // validate pass2
      if(empty($data['pass2'])){
        $data['pass2_err'] = 'Please enter the Password';
      }
    //  echo '<pre>';
      //print_r($data);
     // echo '</pre>';
      $this->view('users/register', $data);
    } else {
      $this->view('users/register');
    }
  }
}