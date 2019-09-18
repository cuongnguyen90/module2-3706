<?php


class ReaderManager
{
   protected $conn;
   public function __construct()
   {
      $db = new DBConnect();
      $this->conn = $db->connect();
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   }
   private function queryData($sql)
   {
      $stmt = $this->conn->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_OBJ);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
   }

   private function control($sql)
   {
      $stmt = $this->conn->prepare($sql);
      return $stmt->execute();
   }

   public function getAll()
   {
      $sql = "SELECT * FROM reader";
      $result =  $this->queryData($sql);
      $arr =[];
      foreach ($result as $item) {
         $reader = new Reader($item);
         array_push($arr,$reader);
      }
      return $arr;

   }
   public function getReader($id)
   {

      $sql = "SELECT * FROM reader WHERE id=$id";
      $stmt = $this->conn->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_OBJ);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;

   }
   public function editReader($object)
   {
      $sql = "UPDATE reader SET name= '".$object->getName()."',code = '".$object->getCode()."',email='".$object->getEmail()."',address='".$object->getAddress()."',phone=".$object->getPhone().",image='".$object->getImage()."' WHERE id='".$object->getId()."'";
      //var_dump($sql);die();
      return $this->control($sql);
   }

   public function deleteReader($id)
   {
      $sql = "DELETE FROM reader WHERE id=$id";
      return $this->control($sql);

   }
   public function addReader($object)
   {
      $sql = "INSERT INTO reader (code,name,email,address,phone,image)  VALUES ('".$object->getCode()."','".$object->getName()."','".$object->getEmail()."','".$object->getAddress()."',".$object->getPhone().",'".$object->getImage()."')";
      return $this->control($sql);

   }
}