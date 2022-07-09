<?php
$room = mysqli_connect("localhost","id19145797_groupone","Utm_123456789");

//verify connection
if(!$room){
    die('Server ERROR <br>');
}

//select database
mysqli_select_db($con, "id19145797_spacedb");

//assign room with block
$s1 = "SELECT r.roomID, b.blockID
FROM room r JOIN blocks b
USING (blockID)
WHERE blockID = 'N28';";

$s2 = "SELECT r.roomID, b.blockID
FROM room r JOIN blocks b
USING (blockID)
WHERE b.blockID = 'N28';";

//query table
$q1 = mysqli_query($con, $s1);
$q2 = mysqli_query($con, $s2);

//display output
while($row = mysqli_fetch_assoc($q1)){

}

while($row = mysqli_fetch_assoc($q2)){

}

//close database
mysqli_close($con);

?>