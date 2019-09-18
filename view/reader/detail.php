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
<?php
include "../../header.php";
?>

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

<?php
include "../../footer.php";
?>
</body>
</html>
