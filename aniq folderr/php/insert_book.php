<?php

$con = mysqli_connect("localhost","id19145797_groupone","Utm_123456789");
if (!$con)
{
die('ERROR: Could not connect.<br>');
}

//select database
if(mysqli_select_db($con, "id19145797_spacedb")){
    echo "Connection to mydatabase successfully established <br>";
}
else{
    echo('ERROR: Could not connect.<br>');
}

//insert data into table roomResult
$result = "INSERT INTO roomResult (username, blockID, roomID, roomTimeStart, roomTimeEnd, roomDate) 
VALUES ('$_POST[user]','$_POST[sblock]', '$_POST[room]', '$_POST[meet_time_start]', '$_POST[meet_time_end]', '$_POST[meet_date]')";

mysqli_query($con, $result);

//close connection
mysqli_close($con);

?>