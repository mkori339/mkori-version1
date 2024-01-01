<?php
session_start();
 include("connection.php");
 if(isset($_SESSION['id']) ){
    $id=$_SESSION['id'];
 $sql="SELECT *FROM hafidhi WHERE  id='$id'";
 $check=mysqli_query($con,$sql);
 if(mysqli_num_rows($check)>0){
    while($row=mysqli_fetch_assoc($check)){
$year=$row['year'];
$name=$row['name'];
$pass=$row['pasward'];
    }

 }

if($_SERVER['REQUEST_METHOD']=="POST")
{ 
$target_path="E:/Hafidhi/";
$target_path=$target_path.basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
   echo("file uploded");
}else{
   echo("file not uploded");  
}
}
mysqli_close($con);
 }else
 header("location:login.php");?>
 <!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>hafidhi website</title>
</head>
<body style="background-color: rgb(55, 89, 45);"><center><h1>
   <?php echo("your name is: ".$name);?><br>
   <?php echo("your pasard is: ".$pass);?><br>
   <?php echo("your year of birth is: ".$year);?><br><br>

</h1>
<button><a href="update.php" style="background-color:orange;">update your details</a></button>
<button><a href="delete.php" style="background-color: orange;">delete details</a></button>
<button><a href="logout.php" style="background-color: red;">logout</a></button><br>
<form method="POST" action="index.php" enctype="multipart/form-data">
    <fieldset  style="width: 200px;">
      <legend>uplod a photo</legend>
    <input type="file" name="file" style="background-color: yellow;"><br>
    <button type="submit" style="background-color: red;">submit</button>
    </fieldset>
  </form>
   </center>
</body>
</html>