<?php 
include_once('includes/layout/header.php');
include_once('includes/cntdb.php');
include_once('includes/functions.php');


login_check ();
?>
<link rel="stylesheet" href="public/static/css/style.admin.css">

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" target="_blank" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

          </ul>
        </nav>
        <h3 class="text-muted">ADMIN</h3>
      </div>

      <div class="jumbotron">
        <h1 class="display-3">Admin Page</h1>
        <p class="lead">wellcome !</p>
        <p><a class="btn btn-info btn-sm" href="add.php" role="button">Add New Note</a>
          </p>
      </div>

 <?php include 'includes/layout/footer.php'; ?>