<?php

@include 'config.php';
session_start();

$user_bookings = "";

$id = $_SESSION['user_id']; 

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$select = "SELECT * FROM bookings WHERE user_id = '{$id}'";
$result = mysqli_query($conn, $select);
$row_count = mysqli_num_rows($result);

if ($row_count > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $room = $row['room'];
    $desk = $row['desk'];
    $start = $row['start'];
    $end = $row['end'];
    $time = $row['time'];


    $user_bookings .= "

    <div id='ubooked'>
            <h6>Room Type:</h6>
              <div>$room</div>
            <h6>Desk Type:</h6>
              <div>$desk</div>
            <h6>Start Date:</h6>
              <div>$start</div>
            <h6>End Date:</h6>
              <div>$end</div>
            <h6>Office Time:</h6>
              <div>$time</div>
          </div>
    
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/home.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>
  <body>
    <div class="nav">
      <img
        id="lg"
        src="images/325945138_665462758703524_520291871664463704_n.jpg"
        alt="logo"
      />
      <span><a href="bookings.php">Booking</a></span>
      <span id="faq"><a href="viewpage.php">Available Desks</a></span>
      <div id="profile-container">
        <span><a href="">Customer Support</a></span>
        <b><span>
        </span></b>
        <span>
          <img src="icons\icons8-user-48.png" alt="profile-picture" class="click"
        /></span>
        <div class="list">
          <a href="profile.php"><button class="links">Profile</button></a>
          <a href="logout.php"><button class="links">Logout</button></a>
        </div>
      </div>
    </div>

    <div class="main-container">
      <div class="left-side">
        <div class="left-container">
          <input type="text" placeholder="Search your bookings" />
          <button>Search</button>
          <hr />
        <?php
          echo $user_bookings;
        ?>
        </div>
      </div>

      <div class="right-side">
        <img src="images/fl2.png" alt="" id="fl1" />
      </div>
    </div>

    <script>
      let click = document.querySelector(".click");
      let list = document.querySelector(".list");
      click.addEventListener("click", () => {
        list.classList.toggle("newlist");
      });
    </script>
  </body>
</html>
