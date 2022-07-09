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
echo $_GET['action'];
echo $_GET['user'];


//insert data into table roomAcceptReject
if(isset($_GET['action'])){
    switch($_GET['action']){
        case "accept":
            $update = "UPDATE roomresult 
            set result = '$_GET[action]' where roomDate = '$_GET[user]'";
            mysqli_query($con, $update);
            break;
        case "reject":
            $update = "UPDATE roomresult 
            set result = '$_GET[action]' where roomDate = '$_GET[user]'";
            mysqli_query($con, $update);
            break;
        default:
            die('Error: Invalid action.');
        break;
    }
}

//close
mysqli_close($con);

?>