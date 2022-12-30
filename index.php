
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="./CSS/style(1).css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
        session_start();

        $userauth = [
            "Web1" => "Website1",
            "Web2" => "Website2",
            "Web3" => "Website3"
        ];

        function loc($keys){
            if ($keys == "Web1") {
                $_SESSION["logged"] = "Web1";
                header("Location:./Groupweb1.php");
                exit;
            }else if ($keys == "Web2") {
                $_SESSION["logged"] = "Web2";
                header("Location:./Groupweb2.php");
                exit;
            }else if ($keys == "Web3") {
                $_SESSION["logged"] = "Web3";
                header("Location:./Groupweb3.php");
                exit;
            }
        }

        if (isset($_POST["loginbtn"])) {

            $user = $_POST["user"];
            $pass = $_POST["pass"];


            if (array_key_exists($user, $userauth)) {
                if ($userauth[$user] == $pass) {
                    loc($user);
                    
                    
                }else{
                    echo "<script>
                        Swal.fire(
                            'Oops...',
                            'Wrong Password. Please Try Again',
                            'error'
                        )
                    </script>";
                }
            }else{
                echo "<script>
                    Swal.fire(
                        'Oops...',
                        'Wrong User Credential',
                        'error'
                    )
                </script>";
            }

        }


    ?>
	<img class="wave" src="img/wave1.png">
	<div class="container">
		<div class="img">
			<img src="img/alogo2.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="img/userlogo.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="user" class="input" placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password"  name="pass" class="input"  placeholder="Password">
						
            	   </div>
				   
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" name="loginbtn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
