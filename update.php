<?php
session_start();
include("connection.php");
if(isset($_SESSION['id']) ){
    $id=$_SESSION['id'];
  
  if($_SERVER['REQUEST_METHOD']=="POST")
{ 
  $name=$_POST['name'];
   $pass=$_POST['pass'];
   $sql="UPDATE hafidhi  SET name='$name', pasward='$pass' WHERE id='$id'";
 $check=mysqli_query($con,$sql);
 if($check){
    echo("updated sucsessfull");
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
   <h1>well come to update your deatails</h1><br>
  <form method="POST" action="update.php">
    <fieldset style="width: 200px;">
      <legend>update person information</legend>
    <input type="text" name="name" placeholder="jina la kwanza"  style="border-radius: 10px;"><br>
    <input type="password" name="pass" placeholder="your passward"  style="border-radius: 10px;"><br>
    <button type="submit" style="background-color: red;">submit</button><br><br>
    </fieldset>
  </form>

</center>
</body>
</html>