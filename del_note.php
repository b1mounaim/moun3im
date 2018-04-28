<?php 
include_once('includes/layout/header.php');
include_once('includes/cntdb.php');
include_once('includes/functions.php');


login_check ();

if (isset($_GET["id"])) {
	$id_get = htmlspecialchars( (int) $_GET['id']);
	 
}else{
	$id_get = 0;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if(!empty($_POST['KEY'])){
        $id = htmlspecialchars( (int) $_POST['id']);
        $key = 2027;
        $user_key = htmlspecialchars($_POST['KEY']);
             if($user_key == $key){
               echo $id;
               $sql = "DELETE FROM `mounaim_bac2018` WHERE `id` = {$id}";

              if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)) {
	           redc_index();
	
               }else{ echo"Error" ;}
               
           }else{redc_index();}}}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



?>

<?php if ($id_get == 0){ ?>
<div style="display:none;" class="container">
    <?php } else{ ?>
<div class="container">
    <?php } ?>
    <div class="row">

<div class="col-sm-11">
  <h2>Delete This Note</h2>
  <p></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?="<?php $_GET['id']; ?>>
    <div class="form-group">
        <label style="display:none;" for="inputdefault">ID : <b style="color:red;"><?php echo $id_err;?></b></label>
        <input style="display:none;" name="id" class="form-control" id="inputdefault" type="text" value="<?php echo $_GET['id']; ?>"><br>
        <label for="inputdefault">enter your KEY to delete this Note :<b style="color:red;"><?php echo $KEY_err;?></b></label>
        <input name="KEY" class="form-control" id="inputdefault" type="password" value=""><br>
        
       
    </div>
        <input class="btn btn-default" type="submit" name="submit" value="Submit"> 
  </form>
</div>

</div>


 <?php include 'includes/layout/footer.php'; ?>