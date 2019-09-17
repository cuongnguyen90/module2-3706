<?php
include_once '../DBConnect/DBConnect.php';
include_once '../Library/Reader.php';
include_once '../Library/ReaderManager.php';

if ($_GET['id']) {
   $readerManager = new ReaderManager();
   var_dump($readerManager->getReader($_GET['id']));

}