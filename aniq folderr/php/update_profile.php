<?php 
  $conn = mysqli_connect("localhost","root","");

  //verify connection
  if(!$conn){
      die('Server ERROR <br>');
  }
  
  //select database
  mysqli_select_db($conn, "id19145797_spacedb");

  //update
  $update = "UPDATE person 
  SET username = '$_POST[username]', 
  pass = '$_POST[pass]' 
  WHERE matricid = '$_POST[matric]'";

  mysqli_query($conn, $update);
  
  //close
  mysqli_close($conn);

?>