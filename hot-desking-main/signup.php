<?php
    @include 'config.php';

    if(isset($_POST['submit'])){
        
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);
        $cpass = md5(($_POST['confirm-password']));

        $select = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $error[] = 'User already exist!';
        }else{
            if($password != $cpass){
                $error[] = 'Passwords do not matched!';
            
            }else{
                $insert = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
                mysqli_query($conn, $insert);
                header('location:login.php');
            };
        };

    };

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/signup.css">
	<title>Register</title>
</head>
<body>
	<div class="main">
	<div class="left">
		<div>
			<a href="index.php">
				<img class="logo"src="images/lavaroom-logo.png" alt="">
			</a>
		</div>
		<div>
			<img class="img-left" src="images/13038.jpg" alt="">
		</div>
	</div>
	
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<?php
			if(isset($error)){
				foreach($error as $error) {
					echo '<span class="error-msg">'.$error.'</span>';
				};
			};
			?>
			
			<div class="input-group reg">
				<input type="text" placeholder="Name" required name="name">
			</div>
			<div class="input-group reg">
				<input type="text" placeholder="Email Address"required name="email">
			</div>
			<div class="input-group reg">
				<input type="password" placeholder="Password" required name="password">
			</div>
			<div class="input-group reg">
				<input type="password" placeholder="Confirm Password" required name="confirm-password">
			</div>
			<div class="input-group reg">
				<button type="submit" name="submit" class="btn">Register</button>
			</div>

			<p class="login-register-text">Have an account? <a href="login.php"> Login Here</a>.</p>
		</form>
	</div>


	</div>
	

	
</body>
</html>