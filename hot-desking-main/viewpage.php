<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewpage.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap"
      rel="stylesheet"
    />
    <title>Lava Room | Available Desks</title>
</head>
<body>

    <div class="nav"><a href="home.php"><img id="lg" src="images/325945138_665462758703524_520291871664463704_n.jpg" alt="logo"></a>
        <span><a href="bookings.php">Booking</a></span>
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
        <form action="" class="left-side">
        <label for="view">View Available Desks</label>
            <select name="view" id="view">
                <option value="start date">Select Start Date</option>
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
        </form>

        <div class="right-side">
            <h1>awd</h1>
        </div>

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