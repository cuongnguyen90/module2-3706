<?php
include_once 'DBConnect/DBConnect.php';
include_once 'Library/Reader.php';
include_once 'Library/ReaderManager.php';

$readerManager = new ReaderManager();
$readers = $readerManager->getAll();

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
      <div class="col-md-10 col-md-offset-1">
         <div class="table-responsive">
            <legend>Reader Manager</legend>
             <div class="clearfix">

             </div>
             <a class="btn btn-success" data-toggle="modal" href="#modal-add">Add New</a>
             <table class="table table-hover">
               <thead>
               <tr>
                   <th>STT</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Action</th>
               </tr>
               </thead>
               <tbody>
               <?php foreach ($readers as $key => $reader): ?>
                  <tr>
                     <td><?= ++$key ?></td>
                     <td><?= $reader->getCode() ?></td>
                     <td><?= $reader->getName() ?></td>
                     <td><?= $reader->getEmail() ?></td>
                     <td><?= $reader->getAddress() ?></td>
                     <td><?= $reader->getPhone() ?></td>
                     <td><img src="images/<?= $reader->getImage() ?>" alt="" width="50px"></td>
                     <td>
                         <a name="" id="" class="btn btn-warning" href="view/reader/detail.php?id=<?=$reader->getId();?>"
                                role="button">Edit</a>
                         <a onclick="checkDelete(this)" data-id="<?=$reader->getId();?>" class="btn btn-danger" data-toggle="modal" href="#modal-confirm">Delete</a>
                     </td>

                  </tr>
               <?php endforeach;?>
               </tbody>
            </table>


             <div class="modal fade" id="modal-add">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                             </button>
                             <h4 class="modal-title">Add New</h4>
                         </div>
                         <div class="modal-body">
                             <form action="view/reader/add.php" method="post" role="form">

                                 <div class="form-group">
                                     <label for="">Code</label>
                                     <input type="text" class="form-control" name="code" id="" placeholder="Code">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Name</label>
                                     <input type="text" class="form-control" name="name" id="" placeholder="Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Email:</label>
                                     <input type="text" class="form-control" name="email" id="" placeholder="Email">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Address:</label>
                                     <input type="text" class="form-control" name="address" id="" placeholder="Address">
                                 </div>
                                 <div class="form-group">
                                     <label for="">Phone:</label>
                                     <input type="nuber" class="form-control" name="phone" id="" placeholder="Phone">
                                 </div>
                                 <div class="clearfix">

                                 </div>
                                 <div class="modal-footer" style="text-align: center;">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success">Add</button>
                                 </div>
                             </form>
                         </div>


                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->

            <!--Confirm Delete-->
             <div class="modal fade" id="modal-confirm">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                             </button>
                             <h4 class="modal-title">Delete Reader</h4>
                         </div>
                         <div class="modal-body" style="text-align: center">
                             <h1 style="color: red">Are you sure ?</h1>
                         </div>
                         <div class="modal-footer" style="text-align: center;">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                             <a id="confirm-delete" type="button" class="btn btn-danger">Sure</a>
                         </div>
                     </div><!-- /.modal-content -->
                 </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->
         </div>
      </div>
   </div>
</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

        function checkDelete(object) {
            let data = object.getAttribute('data-id');
            let confirm = document.getElementById('confirm-delete');
                confirm.href = '../reader/view/delete.php?id='+data;
        }


</script>
</body>
</html>


