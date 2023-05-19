<?php
    @include 'config.php';

    session_start();
    

    if(isset($_POST['submit'])){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);

        $select = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
        
            $row = mysqli_fetch_array($result);
            if($row['user_type'] == 0) {
                $_SESSION['user_id'] = $row['user_id'];
                header('location:home.php');

            }elseif($row['user_type'] == 1) {
                $_SESSION['admin_name'] = $row['user_id'];
                header('location:Hotdesking/index.php');
            };
        
        }else{
            $error[] = 'Incorrect email or password!';
            session_abort();
        };
    };
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Login</title>
</head>
<style>
	
</style>

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
	<div class="cont">
	<div class="container login">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<?php
            if(isset($error)){
                foreach($error as $error) {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
			<div class="input-group">
				<input type="email" placeholder="Enter your email" required name="email">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Enter your password" required name="password">
			</div>
			<div class="input-group login">
				<button type="submit" name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="signup.php"
			>Register Here</a>.</p>
		    <div class="social-media">
				<div class="social-text">
					<p>login with</p>
				</div>
				<a class="social-option" href=""><img  src="images/google.png" alt=""></a>
				<a class="social-option" href=""><img  src="images/fb.png" alt=""></a>
				<a class="social-option" href=""><img  src="images/insta.png" alt=""></a>
				
				
			</div>
		</form>
		
	</div>

	</div>
	

	</div>
	
	
</body>
</html>