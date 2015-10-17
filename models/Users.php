<?php

class Users
{
  private $db;
  private $table = 'users';

  public function __construct()
  {
    $this->db = new DAO();
  }
}

?>

