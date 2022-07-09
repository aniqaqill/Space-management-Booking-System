<?php 
  $conn = mysqli_connect("localhost","root","");

  //verify connection
  if(!$conn){
      die('Server ERROR <br>');
  }
  
  //select database
  mysqli_select_db($conn, "id19145797_spacedb");

  $select = "SELECT * FROM person WHERE username = 'faruqcute30'";
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
  <link rel="stylesheet" href="../css/bar.css"/>
  <script src="../js/dash.js"></script>
  <title>Space Manager Profile</title>
</head>

<body>
    <div
      class="image"
      style="
        background: url(../img/background.jpg) no-repeat center center fixed;
        background-size: cover;
      "
    ></div>
    <header>
        <span class="image-clickable">
          <a href="../roomselection.html">
            <img src="../img/round-table.png" alt="main-logo" class="logo" />
            <h2>Space Booking<br />Management System</h2>
          </a>
        </span>
        <nav>
          <ul class="nav-links">
            <li><a href="../SpaceManagerLogin.html">Logout</a></li>
            <li><a href="space_app_list.php">Space Request List</a></li>
            <li><a href="SpaceRoomHistory.php">Space Room Booking History</a></li>
          </ul>
        </nav>
        <a href="SpaceDashNew.php"><button class="profile">Profile</button></a>
    </header>

    
    <div class="container">
        <div class="box">
            <h1>Space Manager Profile</h1>
            <div id="propic">
                <img src="../img/spacepfp.jpeg">
                <a href="directories">
                  <h4>Change picture</h4>
                </a>
            </div>

            <div class="pro-container">
                <div class="profile-container">
                  <h4 class="name"><?php
              echo $row['fullname'];
              ?>
              </h4>
                  <div class="lectid"><?php
              echo $row['matricid'];
              ?></div>
                  <div class="position"><?php
              echo $row['levelspace'];
              ?></div>
                  <div class="pnum"><?php
              echo $row['fonnumber'];
              ?></div>
                  <div class="email"><a href="mailto:<?php $row['levelspace'];?>">
              <?php
              echo $row['email'];
              ?></a></div>
                  <div class="fax">555-123-4567</div>
                  <div class="office">34-55-12, M28</div>
                </div>
            </div>

            <form class="edit-container" action="update_profile.php" method="post">
                <table class="user-pass-edit">
                  <tr class="header-credentials">
                    <td>
                      Username
                    </td>
                    <td>
                      Password
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input name ="username" type="text" id="username" value="" placeholder="faruqcute30">
                    </td>
                    <td>
                      <input name="pass" type="password" id="password" value="" placeholder="Update password here">
                    </td>
                  </tr>
                  <tr >
                    <td colspan="2" class="message">
                      <i>Note: password <b>MUST</b> consists at least 6 characters and 1 number.</i>
                    </td>
                  </tr>
                  <tr>
                  <?php echo '<input type="hidden" name="matric" value="'.$matric.'">' ?>
                    <td colspan="2" class="edit">
                      <input type="submit" value="Update Details" id="edit" onclick="validatePassword(document.getElementById('password'))">
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