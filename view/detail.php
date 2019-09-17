<?php
include_once '../DBConnect/DBConnect.php';
include_once '../Library/Reader.php';
include_once '../Library/ReaderManager.php';
if ($_GET['code']){
   $detail = new ReaderManager();
   $result = $detail->getReader($_GET['code']);
   var_dump($result);die;
}
