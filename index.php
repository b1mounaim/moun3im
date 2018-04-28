<?php 
include 'includes/layout/header.php';
include_once('includes/cntdb.php');
include_once('includes/functions.php');


	if (isset($_SESSION['admin_id'])) {

	}
?>

<link rel="stylesheet" href="public/static/css/style.index.css">
<body>
              

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Mounaim</h1>
        <p class="lead blog-description">Mounaim</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

                <?php  
    $query = "SELECT * FROM `mounaim_bac2018`";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
           ?>
            
            
          <div style="font-size: 15px;" class="blog-post">
            <p class="blog-post-meta"><?php echo $row["Dates"];?> by <a href="#">Abdelmounaim</a></p>
            <p><?php echo $row["Notes"];?></p>

              
                        <?php if (isset($_SESSION['admin_id'])) {?>
              <a href="edite.php?id=<?php echo $row["id"];?>">Edit</a> - 
              <a href="del_note.php?id=<?php echo $row["id"];?>">Delete</a>
              ><a target="_blank" href="adminPg.php">    Go to Admin Page</a>
                                 <?php } ?>
            <hr>
            
          </div><?php }} ?>
            <!-- /.blog-post -->

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Notice</h4>
              <p><em>This website and this notes will publish next year after #BAC2018 results and I'm trying to add new postes every few days about what I study, some advises, ... to motivate you to keep going,another thing is that why I've choose English and not French or Arab? I'll tell in future! . "hhh, sorry for my breaking English I'm trying to learn it".</em></p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">December 2017</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


 
 
 
 
 <?php include 'includes/layout/footer.php';?>
