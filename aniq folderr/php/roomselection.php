<?php
  $room = mysqli_connect("localhost","id19145797_groupone","Utm_123456789");

  //verify connection
  if(!$room){
    die('Server ERROR <br>');
  }

  //select database
  mysqli_select_db($room, "id19145797_spacedb");

  //get data from form
  $user = $_GET['user'];

?>
    
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/roomselection.css" />
  </head>

  <body>
    <div id="title_section">
      <h1>Space Booking Section</h1>
      <h2>Lecturer Room selection</h2>
    </div>
    <div></div>
    <div id="intro">
      <div class="first">
        <b>Need space to teach?</b>
      </div>
      <div class="second">We are here to help you :)</div>
      <div class="select">Select room type to book</div>
    </div>

    <div id="roomtype-container">
      <div id="roomtype">
        <div id="hall">
        <?php echo '<a href="LectureBooking.php?user='.$user.'">'?>
            <img src="../img/lecture hall.jpg" class="dewan" />
          </a>
          <div class="text">Lecture Hall</div>
        </div>
        <div id="meeting">
        <?php echo '<a href="MeetingBooking.php?user='.$user.'">'?>
            <img src="../img/meeting room.jpg" class="meet" />
          </a>
          <div class="text">Meeting Room</div>
        </div>
        <div id="lab">
          <?php echo '<a href="LabBooking.php?user='.$user.'">'?>
            <img src="../img/computer lab.jpg" class="lab" />
          </a>
          <div class="text">Computer Lab</div>
        </div>
      </div>
    </div>
  </body>
</html>

<?php

//close
mysqli_close($room);

?>