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
  <link rel="stylesheet" href="../css/booking.css" />
  <link rel="stylesheet" href="../css/bar.css" />
  <title>Meeting Room Booking</title>
</head>

<body>
  <div class="blur-image" style="
        background: url(../img/meeting\ room.jpg) no-repeat center center fixed;
        background-size: cover;
      "></div>
  <header>
    <span class="image-clickable">
      <a href="../roomselection.html">
        <img src="../img/round-table.png" alt="main-logo" class="logo" />
        <h2>Space Booking<br />Management System</h2>
      </a>
    </span>
    <nav>
      <ul class="nav-links">
        <li><a href="../LecturerLogin.html">Logout</a></li>
        <li><?php echo '<a href="roomselection.php?user='.$user.'">Book a Space</a>'?></li>
        <li><?php echo '<a href="room_history.php?user='.$user.'">Room Booking History</a></li>' ?></li>
        <li><?php echo '<a href="room_result.php?user='.$user.'">Room Booking Result</a></li>' ?></li>
      </ul>
    </nav>
    <a href="LectDashNew.php"><button>Profile</button></a>
  </header>
  <div class="container">
    <div class="box">
      <form autocomplete="on" class="labform" method="post" action="php/insert_book.php">
        <h1>MEETING ROOM</h1>
        <br />

        <div class="block">
          <label for="block">
            <h4>Select Block:</h4>
          </label><br />
          <select name="sblock" id="selectblock">
            <option value="N28">N28</option>
            <option value="N28a">N28a</option>
          </select>
        </div>

        <div class="autocomplete" style="width: 300px">
          <label for="room">
            <h4>Select Room:</h4>
          </label><br />
          <input id="myInput" type="text" name="room" placeholder="Search Room" />
        </div>

        <div class="date">
          <label for="Sdate">
            <h4>Select Date:</h4>
          </label><br />
          <input type="date" id="Sdate" name="meet_date" value="" />
        </div>

        <div class="time">
          <label for="Stime">
            <h4>Select Time:</h4>
          </label><br />
          <input type="time" id="Stime" name="meet_time_start" />
          <h5>until</h5>
          <input type="time" id="Etime" name="meet_time_end" />
        </div>

        <!--take username -->
        <?php echo '<input type="hidden" name="user" value="'.$user.'"]"/>' ?>
        <br>
        <br>
        <div class="submit">
          <input type="submit" />
          <a href="roomselection.php">
            <h3>cancel</h3>
          </a>
        </div>
      </form>
      <script src="../js/meetingbook.js"></script>
    </div>
  </div>
</body>

</html>

<?php
  mysqli_close($room);
?>