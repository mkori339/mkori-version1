<?php
session_start();
include("connection.php");
if(isset($_SESSION['id']) ){
  
  if($_SERVER['REQUEST_METHOD']=="POST")
{ 
  $id=$_POST['id'];
   $sql="DELETE FROM hafidhi  WHERE id='$id' ";
 $check=mysqli_query($con,$sql);
 if($check){
    
    header("location:index.php");
 }
 else{
    echo("something went wrong");
}
}
 }
 else
 header("location:login.php");
?>
<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>hafidhi website</title>
</head>
<body style="background-color: rgb(55, 89, 45);"><center>
   <h1>please fill the information below</h1><br>
  <form method="POST" action="delete.php">
    <fieldset style="width: 200px;">
      <legend>fill to delete</legend>
    <input type="number" name="id" placeholder="namba ya kitambulisho" style="border-radius: 10px;"><br>
    <button type="submit"  style="background-color: red;">submit</button><br><br>
    </fieldset>
  </form>

</center>
</body>
</html>