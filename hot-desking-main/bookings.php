<?php

    @include 'config.php';
    session_start();
    $id = $_SESSION['user_id'];

    if(isset($_POST['submit']))
    {
        
        $room = mysqli_real_escape_string($conn, $_POST['room']);
        $desk = mysqli_real_escape_string($conn, $_POST['desk']);
        $start = mysqli_real_escape_string($conn, $_POST['start']);
        $end = mysqli_real_escape_string($conn, $_POST['end']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        
        $insert = "INSERT INTO bookings (room, user_id, desk, start, end, time) VALUES('$room', '$id', '$desk', '$start', '$end', '$time')";
        $query_run = mysqli_query($conn, $insert);

        if($query_run){
            echo "<script>alert('Booked Successfully!')</script>";
        }
         else {
            $_SESSION['status'] = "Booking Unavailable!";
            header('location.booking.php');
        };
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/booking.css">
    <title>Lava Room | Bookings</title>
</head>
<body>

    <div class="nav"><a href="home.php"><img id="lg" src="images/325945138_665462758703524_520291871664463704_n.jpg" alt="logo"></a>
        <span><a href="home.php">Home</a></span>
        <span id="faq"><a href="viewpage.php">Available Desks</a></span>
        <div id="profile-container">
            <span><a href="">Customer Support</a></span>
            <span> <img src="icons\icons8-user-48.png" alt="profile-picture" class="click"></span>
            <div class="list">
                <a href="profile.php"><button class="links">Profile</button></a>
                <a href="logout.php"><button class="links">Logout</button></a>
            </div>
        </div>
    </div>

     <div class="main-container">
        <div class="left-div">
            <h3>Floors</h3>
            <a href=""><h4>01</h4></a>
            <a href=""><h4>02</h4></a>
        </div>

        <div class="mid-div">
            <img src="images/fl2.png" alt="floor-plan">
        </div>

`        <form action="" class="right-div" method="POST">
            <h2 id="work">Workspace Booking</h2>
            <label for="room">Room Type</label>
            <select name="room" id="room">
                <option value="">Select Room Type</option>
                <option value="Reception and Greeting Area">Reception and Greeting Area</option>
                <option value="Phone Room">Phone Room</option>
                <option value="Common Area">Common Area</option>
                <option value="Wellness Room">Wellness Room</option>
                <option value="IT Room">IT Room</option>
                <option value="Office Room">Office Room</option>
            </select>

            <label for="desk">Desk Type</label>
            <select name="desk" id="desk">
                <option value="">Select Desk Type</option>
                <option value="L-shaped Desk">L-Shaped Desk</option>
                <option value="Executive Desk">Executive Desk</option>
                <option value="Writing Desk">Writing Desk</option>
                <option value="Computer Desk">Computer Desk</option>
            </select>

            <label for="start">Start Date</label>
            <select name="start" id="start">
                <option value="">Select Start Date</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <label for="end">End Date</label>
            <select name="end" id="end">
                <option value="">Select End Date</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <label for="time">Office Time</label>
            <select name="time" id="time">
                <option value="">Select Office Time</option>
                <option value="Full day">9 AM to 5 PM - Full Day</option>
                <option value="Morning">9 AM to 1 PM - Morning</option>
                <option value="Afternoon">1 PM to 5 PM - Afternoon</option>
                <option value="Evening">5 PM to 9 PM - Evening</option>
                <option value="Midnight">9 PM to 1 AM - Midnight</option>
                <option value="Dawn">1 AM to 5 AM - Dawn</option>
            </select>
            <button type="submit" name="submit" id="sub">Start Booking!</button>
        </form>
     </div>
     <script>
        let click = document.querySelector('.click');
        let list = document.querySelector('.list');
        click.addEventListener("click", ()=>{
            list.classList.toggle('newlist');
        });
    </script>
</body>
</html>