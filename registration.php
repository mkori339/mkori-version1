<?php
  include("connection.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
{ 
  $name=$_POST['name'];
   $id=$_POST['id'];
   $year=$_POST['year'];
   $pass=$_POST['pass'];
  

$sql="INSERT INTO hafidhi(id,name,pasward,year) VALUE('$id','$name','$pass','$year')";
if(!mysqli_query($con,$sql)){
  echo(" data not inserted");
}
else{
  echo(" data are inserted succsessfull");
  header("location:login.php");
}

}
?>





<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>hafidhi website</title>
</head>
<body style="background-color: rgb(55, 89, 45);"><center>
   <h1>please fill the information below</h1><br>
  <form method="POST" action="registration.php">
    <fieldset style="width: 200px;">
      <legend >person information</legend>
    <input type="text" name="name" placeholder="jina la kwanza" style="border-radius: 10px;"><br>
    <input type="password" name="pass" placeholder="your passward" style="border-radius: 10px;"><br>
  <input type="number" name="year" placeholder="mwaka a kuzaliwa" style="border-radius: 10px;"><br>
  <input type="number" name="id" placeholder="namba ya kitambulisho" style="border-radius: 10px;"><br>
    <button type="submit" style="background-color: red;">submit</button>
    </fieldset>
  </form></center>
</body>
</html>
