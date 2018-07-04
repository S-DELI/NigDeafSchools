<?php
class Database
{
  private $host = 'localhost';
  private $dbname = 'afriklib_deafsearch';
  private $username = 'afriklib_orodo2';
  private $pass = '@orlu=orodo2018';
  public $conn;

  public function dbConnect()
  {
    $this->conn = null;
    try {
      $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      echo 'Connection error: ' .$e->getMessage();
    }
    return $this->conn;

  }
}
