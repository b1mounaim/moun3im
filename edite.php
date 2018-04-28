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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$id = htmlspecialchars( (int) $_POST['id']);
$id =  mysqli_real_escape_string($conn , $id) ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST['Note'] && $_POST['Date'] && $_POST['KEY'])){
        
            
        $key = 2027;
        $user_key = htmlspecialchars($_POST['KEY']);
             if($user_key == $key){
        $Date_ed =  htmlspecialchars($_POST['Date']);
        $Date_ed =  mysqli_real_escape_string($conn , $Date_ed) ;
        $Note_ed =  htmlspecialchars($_POST['Note']);
        $Note_ed =  mysqli_real_escape_string($conn , $Note_ed) ;
        
            
        $sql = "UPDATE `mounaim_bac2018` SET `Notes` = '{$Note_ed}', `Dates` = '{$Date_ed}' WHERE `mounaim_bac2018`.`id` = {$id}";
        if (mysqli_query($conn, $sql)) {
            redc_index();
        }else{
	    echo"Error : ".$sql."<br>".mysqli_error($conn);}}else{redc_index();}}else{redc_index();}
    


}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                     $quuery = "SELECT * FROM `mounaim_bac2018` WHERE `mounaim_bac2018`.`id` = {$id_get}";
                     $result = mysqli_query($conn, $quuery);

                    if (mysqli_num_rows($result) > 0) {
	                 while ($row = mysqli_fetch_assoc($result)){                           


?>

<div class="container">
    <div class="row">

<div class="col-sm-11">
  <h2>Edit This Note</h2>
  <p></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?="<?php $_GET['id']; ?>>
    <div class="form-group">
      <label style="display:none;" for="inputdefault">ID : <b style="color:red;"></b></label>      
      <input style="display:none;" name="id" class="form-control" id="inputdefault" type="text" value="<?php echo $_GET['id']; ?>"><br>
      <label for="inputdefault">Edit THE date : <b style="color:red;"></b></label>
      <input name="Date" class="form-control" id="inputdefault" type="text" value="<?php echo $row['Dates']; ?>"><br> 
      <label for="comment">Edit THE note : <b style="color:red;"></b></label>
      <textarea name="Note" class="form-control" rows="5" id="comment"><?php echo $row['Notes'];?></textarea>
    </div>
      <label for="inputdefault">enter your KEY to edit this Note :<b style="color:red;"><?php echo $KEY_err;?></b></label>
      <input name="KEY" class="form-control" id="inputdefault" type="password" value=""><br>
      <input class="btn btn-default" type="submit" name="submit" value="Submit"> 
  </form>
</div>

</div>
</div>

<?php
    }}
?>

 <?php include 'includes/layout/footer.php'; ?>