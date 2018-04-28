<?php 
include_once('includes/layout/header.php');
include_once('includes/cntdb.php');
include_once('includes/functions.php');


login_check ();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(empty($_POST['Date'])){
        $Date_err = "please enter the Date";
    }if(empty($_POST['Note'])){
        $Note_err = "please enter your Note";

}
    else{
        if(!empty($_POST['Note'] && $_POST['Date'])){
        $key = 2027;
        $user_key = htmlspecialchars($_POST['KEY']);
        if($user_key == $key){
        $Date =  htmlspecialchars($_POST['Date']);
        $Date =  mysqli_real_escape_string($conn , $Date) ;
        $Note =  htmlspecialchars($_POST['Note']);
        $Note =  mysqli_real_escape_string($conn , $Note) ;
            
        $sql = "INSERT INTO `mounaim_bac2018`(`Notes`, `Dates`) VALUES ('{$Note}','{$Date}')";

        if (mysqli_query($conn, $sql)) {
            redirect('adminpg.php');
        }else{
     	echo"Error : ".$sql."<br>".mysqli_error($conn);
}}else{$KEY_err = "invalid key";}}}}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    
      



?>

<div class="container">
    <div class="row">

<div class="col-sm-11">
  <h2>Add New Note</h2><p></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
        <label for="inputdefault">Date : <b style="color:red;"><?php echo $Date_err ?></b></label>
      <input name="Date" class="form-control" id="inputdefault" type="text" value="<?php echo $Date;?>"><br>
        <label for="comment">Note : <b style="color:red;"><?php echo $Note_err;?></b></label>
      <textarea name="Note" class="form-control" rows="5" id="comment"><?php echo $Note;?></textarea>
        <label for="inputdefault">enter your KEY to add this Note : <b style="color:red;"><?php echo $KEY_err;?></b></label>
      <input name="KEY" class="form-control" id="inputdefault" type="password" value=""><br>
    </div>
        <input class="btn btn-default" type="submit" name="submit" value="Submit"> 
  </form>
</div>

</div>
</div>


 <?php include 'includes/layout/footer.php'; ?>