<?php


class ReaderManager extends Reader
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
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);
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

      $sql = "SELECT * FROM reader WHERE id='$id'";
      return $this->queryData($sql);

   }
   public function editReader($object)
   {
      $sql = "UPDATE reader SET code='$object->code',name='$object->name',email='$object->email',address='$object->address',phone='$object->phone',image='$object->image'";

   }

   public function deleteReader($id)
   {
      $sql = "DELETE FROM reader WHERE id='$id'";
      return $this->control($sql);

   }
   public function addReader($object)
   {
      $sql = "INSERT INTO reader (code,name,email,address,phone,image)  VALUES ('".$object->getCode()."','".$object->getName()."','".$object->getEmail()."','".$object->getAddress()."',$object->getPhone(),'".$object->getImage()."')";
      return $this->control($sql);

   }
}