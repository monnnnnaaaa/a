<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Appointments</title>
    <link rel="stylesheet" href="css/Appt.css">
</head>
<body>
    <header>
        <img src="images/lavaroom-logo.png" alt="logo">
        <ul class="headerList">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./Appt.php">Appointments</a></li>
                <li><a href="./addAppt.php">Add Appointments</a></li>
                <li><a href="./user.php">Users</a></li>
                <li><a href="./logout.php">Logout</a></li>
        </ul>
</header>
<div class="content">
    <div class="setup">
        <h1>Set Appointments</h1>
        <h3>Seat</h3>
        <input type="text" id="Seat" name="Seat">
        <h3>Date</h3>
        <input type="text" id="Date" name="Date">
        <h3>Time in</h3>
        <input type="text" id="Time" name="Time">
        <h3>Time out</h3>
        <input type="text" id="Time" name="Time">
        <button class="btn">Submit</button>
    </div>
</div>
</body>
</html>