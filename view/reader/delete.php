<?php
include_once '../DBConnect/DBConnect.php';
include_once '../Library/Reader.php';
include_once '../Library/ReaderManager.php';

if ($_GET['id']){
   $detail = new ReaderManager();
   $detail->deleteReader($_GET['id']);
   header("Refresh:0; url=../../index.php");

}else{
   echo "Error !";
}
