<?php

$con = mysqli_connect("localhost", "root","");
if (!$con)
{
die('ERROR: Could not connect.<br>');
}

if (mysqli_query($con,"CREATE DATABASE id19145797_spacedb")){
    echo "Database created<br>";
}else{
    echo "Error creating database: " . mysqli_error($con) . "<br>";
}

if(mysqli_select_db($con, "id19145797_spacedb")){
    echo "Connection to mydatabase successfully established <br>";
}
else{
    echo('ERROR: Could not connect.<br>');
}

//create table person
$sql = "CREATE TABLE person
(
    fullname varchar(255),
    email varchar(255),
    fonnumber varchar(255),
    matricid varchar(255),
    gender varchar(10),
    levelspace varchar(10),

    username varchar(20),
    pass varchar(20),

    primary key (username)
);";

//create table block
$block ="CREATE TABLE blocks(
  blockID varchar (5),
  
  primary key(blockID),
  unique(blockID)
);";

//create table room
$room = "CREATE TABLE room(
  roomID varchar(15),
  roomType varchar (50),
  blockID varchar(5),

  primary key (roomID),
  foreign key (blockID) references blocks(blockID),
  unique(roomID)
);";

//create table room result
/*$acceptreject = "CREATE TABLE roomAcceptReject(
  username varchar(20),
  roomID varchar(15),
  

  foreign key (roomID) references room(roomID),
  foreign key (username) references person(username)

);";*/

//create room time and date booking
$rtd = "CREATE TABLE roomResult(
  username varchar(20),
  blockID varchar(5),
  roomID varchar (15),
  roomTimeStart time(2),
  roomTimeEnd time(2),
  roomDate Date,
  roomResult varchar (10),

  foreign key (username) references person(username),
  foreign key (blockID) references blocks(blockID),
  foreign key (roomID) references room(roomID)
);";

//query table student
if (mysqli_query($con,$sql)){
  echo "Table student created<br>";
}
else{
  die('Error creating table: ' . mysqli_error($con) . '<br>');
}

//query table block
if (mysqli_query($con,$block)){
  echo "Table block created<br>";
}
else{
  die('Error creating table: ' . mysqli_error($con) . '<br>');
}

//query table room
if (mysqli_query($con,$room)){
  echo "Table room created<br>";
}
else{
  die('Error creating table: ' . mysqli_error($con) . '<br>');
}

//query table roomAcceptReject
/*if (mysqli_query($con,$acceptreject)){
  echo "Table roomAcceptReject created<br>";
}
else{
  die('Error creating table: ' . mysqli_error($con) . '<br>');
}*/

//query table roomResult
if (mysqli_query($con,$rtd)){
  echo "Table roomResult created<br>";
}
else{
  die('Error creating table: ' . mysqli_error($con) . '<br>');
}

//close connection
mysqli_close($con);
?>

