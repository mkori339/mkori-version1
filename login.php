





<!DOCTYPE html>

<html>
<?php
session_start();
  include("connection.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
{ 
  $name=$_POST['name'];
   $pass=$_POST['pass'];
   $sql="SELECT *FROM hafidhi WHERE  name='$name' && pasward='$pass' limit 1";
 $check=mysqli_query($con,$sql);
 if(!$check){
    echo("kkkk");
 }
 if(mysqli_num_rows($check)>0){
    while($row=mysqli_fetch_assoc($check)){
$_SESSION['id']=$row['id'];
if($name=$row['name']&& $pass=$row['pasward']){
    header("location:index.php");
}


  }
   
 }
 mysqli_close($con);



 echo'<script>
 window.alert("wrong user name or password");
  </script>';

}
?>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>hafidhi website</title>
</head>
<body style="background-color: rgb(55, 89, 45);"><center>
   <h1>please fill the information below</h1><br>
  <form method="POST" action="login.php">
    <fieldset style="width: 200px;">
      <legend>person information</legend>
    <input type="text" name="name" placeholder="jina la kwanza" style="border-radius: 10px;"><br>
    <input type="password" name="pass" placeholder="your passward" style="border-radius: 10px;"><br>
    <button type="submit" style="background-color: red;">submit</button><br><br>
    <a href="registration.php" style="color: red;"><i>click register</i></a>
    </fieldset>
  </form>

</center>
</body>
</html>