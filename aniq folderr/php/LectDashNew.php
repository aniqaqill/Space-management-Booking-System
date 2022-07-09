<?php 
  $conn = mysqli_connect("localhost","root","");

  //verify connection
  if(!$conn){
      die('Server ERROR <br>');
  }
  
  //select database
  mysqli_select_db($conn, "id19145797_spacedb");

  $select = "SELECT * FROM person WHERE username = 'glorialucy09'";
  $query = mysqli_query($conn, $select);

  while($row=mysqli_fetch_assoc($query)){
    $user = $row['username'];
    $matric = $row['matricid'];

?>
    
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/dashboardProfile.css" />
    <link rel="stylesheet" href="../css/bar.css" />
    <script src="../js/dash.js"></script>
    <title>Lecturer Dashboard</title>
  </head>

  <body>
    <div
      class="image"
      style="
        background-image: url(img/background.jpg);
        background-size: cover;
      "
    ></div>

    <header>
      <span class="image-clickable">
        <a href="../LectDashNew.html">
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
     
      <a href="LectDashNew.php"><button class="profile">Profile</button></a>
    </header>

    <div class="container">
      <div class="box">
        <h1>Lecturer Profile</h1>
        <div id="propic">
          <img src="../img/lectpfp.jpeg" />
          <a href="directories">
            <h4>Change picture</h4>
          </a>
        </div>

        <div class="pro-container">
          <div class="profile-container">
            <h4 class="name">
              <?php
              echo $row['fullname'];
              ?>
            </h4>
            <div class="lectid">
            <?php
              echo $row['matricid'];
              ?>
            </div>
            <div class="position">
              UTM 
              <?php
              echo $row['levelspace'];
              ?>
              , Faculty of Computer Science
            </div>
            <div class="pnum">
            <?php
              echo $row['fonnumber'];
              ?>
            </div>
            <div class="email">
              <a href="mailto:<?php $row['email'] ?>">
                <?php
                echo $row['email'];
                ?>
              </a>
            </div>
            <div class="fax">555-123-4567</div>
            <div class="office">03-31-05, N28a</div>
          </div>
        </div>

        <form class="edit-container" action="update_profile.php" method="post">
          <table class="user-pass-edit">
            <tr class="header-credentials">
              <td>Username</td>
              <td>Password</td>
            </tr>
            <tr>
              <td>
                <input
                  type="text"
                  id="username"
                  value=""
                  name="username"
                  placeholder="glorialucy09"
                />
              </td>
              <td>
                <input
                  type="password"
                  id="password"
                  value=""
                  name="pass"
                  placeholder="Update password here"
                />
              </td>
            </tr>
            <tr>
              <td colspan="2" class="message">
                <i
                  >Note: password <b>MUST</b> consists at least 6 characters and
                  1 number.</i
                >
              </td>
            </tr>
            <tr>
              <?php echo '<input type="hidden" name="matric" value="'.$matric.'">' ?>
              <td colspan="2" class="edit">
                <input
                  type="submit"
                  value="Update Details"
                  id="edit"
                  onclick="validatePassword(document.getElementById('password'))"
                />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
 
<?php
}
mysqli_close($conn);

?>
