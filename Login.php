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
                echo "<script>alert('Wrong Password. Please Try Again')</script>";
            }
        }else{
            echo "<script>alert('Wrong User Credential')</script>";
        }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/login1.css">
    <script src="https://kit.fontawesome.com/7489440202.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="app">

		<div class="bg"></div>
        
        <form action="" method="POST">
            <div class="form">
                <header>
                    <img src="./IMG/aLOGO.png">
                </header>
                <div class="inputs">
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" id="pass" name="pass" placeholder="Password">
                    <button class="btneye"><i class="fa-regular fa-eye"></i></button>
                    <p class="light"><a href="#">Forgot password?</a></p>
                </div>
            </div>
            <footer>
                <input type="submit" class="button" name="loginbtn" value="Continue">
            </footer>
        </form>

	</div>


    <script>

        const eye = document.getElementsByClassName("btneye")[0];
        let pass = document.getElementById("pass")

        eye.addEventListener("click",(e)=>{
            e.preventDefault();

            if (pass.getAttribute("type") == "password") {
                pass.setAttribute("type", "text")
            }else{
                pass.setAttribute("type", "password")
            }


        })

    </script>
</body>
</html>