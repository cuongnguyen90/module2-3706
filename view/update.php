<?php
include_once '../DBConnect/DBConnect.php';
include_once '../Library/Reader.php';
include_once '../Library/ReaderManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && empty(!$_POST['name'])
    && empty(!$_POST['code'] )
    && empty(!$_POST['email'])
    && empty(!$_POST['address'])
    && empty(!$_POST['phone'])
) {
   $data = (object)[
       'id'=>   $_POST['id'],
       'name' => $_POST['name'],
       'email' => $_POST['email'],
       'phone' => $_POST['phone'],
       'address' => $_POST['address'],
       'code' => $_POST['code'],
       'image' => isset($_POST['image']) ? $_POST['image'] : 'images.png'
   ];

    $reader = new Reader($data);
    $manager = new ReaderManager();
    $manager->editReader($reader);
    header("Refresh:0; url=../index.php");


}
else{
   echo "Error";
}