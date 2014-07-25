<?php

class Database
{
  protected $server;
  protected $username;
  protected $password;
  protected $database_name;

   function __construct($database_name = 'akirachix', $password = '', $username = 'root', $server = 'localhost')
  {
    $this->database_name = $database_name;
    $this->server = $server;
    $this->username = $username;
    $this->password = $password;
  }

   public function connection()
  {
    return new mysqli($this->server, $this->username, $this->password, $this->database_name);
  }


}

