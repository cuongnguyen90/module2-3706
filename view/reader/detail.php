<?php
include_once '../../DBConnect/DBConnect.php';
include_once '../../Library/Reader.php';
include_once '../../Library/ReaderManager.php';

if ($_GET['id']) {
   $readerManager = new ReaderManager();
   $_reader = $readerManager->getReader($_GET['id']);
   $reader = new Reader($_reader);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Starter Template for Bootstrap</title>

   <!-- Bootstrap core CSS -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <style>
      body {
         padding-top: 50px;
      }

      .starter-template {
         padding: 40px 15px;
         text-align: center;
      }
   </style>

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
         </ul>
      </div><!--/.nav-collapse -->
   </div>
</div>

<div class="container">

   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         <form action="update.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
               <legend>Edit <?= $reader->getName()?> - <?= $reader->getCode()?> </legend>
            </div>

            <div class="form-group">
               <label for="">Code :</label>
               <input type="text" class="form-control" name="code" id="" value="<?= $reader->getCode()?>">
            </div>
            <div class="form-group">
               <label for="">Name :</label>
               <input type="text" class="form-control" name="name" id="" value="<?= $reader->getName()?>">
            </div>
            <div class="form-group">
               <label for="">Phone :</label>
               <input type="text" class="form-control" name="phone" id="" value="<?= $reader->getPhone()?>">
            </div>
            <div class="form-group">
               <label for="">Email:</label>
               <input type="email" class="form-control" name="email" id="" value="<?= $reader->getEmail()?>">
            </div>
            <div class="form-group">
               <label for="">Address:</label>
               <input type="text" class="form-control" name="address" id="" value="<?= $reader->getAddress()?>">
            </div>
            <div class="form-group">
               <label for="">Image:</label>
               <img src="../../images/<?= $reader->getImage()?>" class="img-responsive img-circle" alt="Image" width="80px">
            </div>
            <div class="form-group hidden">
               <label for="">ID :</label>
               <input type="text" class="form-control" name="id" value="<?= $reader->getId()?>">
            </div>
            <div class="form-group">
               <div class="col-sm-4 col-sm-offset-4" style="text-align: center">
                  <a type="button" href="../../index.php" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-success">Update</button>
               </div>
            </div>
         </form>
      </div>
   </div>

</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
