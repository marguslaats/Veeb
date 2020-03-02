<?php


class User
{
private $db;

public function __construct(){
  $this->db = new Database();
  }
  //check email
  public  function  findUserByEmail($email){
  $this->db->query('SELECT * FROM users WHERE email=:email');
  $this->db->bind(':email', $email);
  $user = $this->db->getOne();
  if($this->db->rowCount() > 0){
    return true;
  } else{
    return false;
  }
  }
}