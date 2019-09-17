<?php
include_once '../DBConnect/DBConnect.php';
include_once '../Library/Reader.php';
include_once '../Library/ReaderManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && isset($_POST['name'])
    && isset($_POST['code'] )
    && isset($_POST['email'])
    && isset($_POST['address'])
    && isset($_POST['phone'])
) {
   $data = (object)[
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'phone' => $_POST['phone'],
      'address' => $_POST['address'],
      'code' => $_POST['code'],
      'image' => isset($_POST['image']) ? $_POST['image'] : 'images.png'
   ];
   $reader = new Reader($data);
   $manager = new ReaderManager();
   $manager->addReader($reader);
   header("Refresh:0; url=../index.php");
}
else{
   echo "Error";
}