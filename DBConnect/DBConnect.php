<?php


class DBConnect
{
   const HOTS = "mysql:host=localhost;dbname=library_manager";
   const USER = 'root';
   const PASS = 'E2bu4Pro3';

   private $host;
   private $user;
   private $pass;

   public function __construct()
   {
      $this->host = self::HOTS;
      $this->user =  self::USER;
      $this->pass = self::PASS;
   }

   public function connect()
   {
      $conn = null;
      try{
         $conn = new PDO($this->host,$this->user,$this->pass);

      }catch (PDOException $exception){
         return $exception->getMessage();
      }

      return $conn;
   }
}