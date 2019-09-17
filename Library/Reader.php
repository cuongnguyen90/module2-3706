<?php


class Reader
{
   private $code;
   private $name;
   private $email;
   private $address;
   private $phone;
   private $image;
   private $id;

   public function __construct($object)
   {
      $this->name = $object->name;
      $this->phone = $object->phone;
      $this->address = $object->address;
      $this->code = $object->code;
      $this->email = $object->email;
      $this->image = $object->image;
      $this->id = $object->id;
   }

   /**
    * @return mixed
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * @return mixed
    */
   public function getCode()
   {
      return $this->code;
   }

   /**
    * @return mixed
    */
   public function getAddress()
   {
      return $this->address;
   }

   /**
    * @return mixed
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * @return mixed
    */
   public function getImage()
   {
      return $this->image;
   }

   /**
    * @return mixed
    */
   public function getPhone()
   {
      return $this->phone;
   }

   public function getId()
   {
      return $this->id;
   }

}