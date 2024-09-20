<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define the predefined username and password
    $validUsername = "yato"; // Replace with the actual username
    $validPassword = "123456"; // Replace with the actual password

    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the submitted username and password are correct
    if ($username === $validUsername && $password === $validPassword) {
        // Successful login, redirect to a welcome page or dashboard
        header("Location: pratice2.php");
        exit();
    } else {
        // Invalid login, display an error message
        $error = "Invalid username or password. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="./include/css/bootstrap.min.css">
    <link rel="stylesheet" href="./include/css/all.min.css">
    <link rel="stylesheet" href="./include/css/login.css">
    <link rel="stylesheet" href="./include/css/index.css">
    <title>Login Page</title>
    
</head>
<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->



   

    
    <div class="header-bottom">
        <div class="main">   
            <div class="back">
                  
                <h1 class="title "><i class="fa-solid fa-tent" style="color: #ffffff;"></i> Property Rental</h1>
             
         </div>
            <ul class="yati">
                
              
               <li><a href="./index.php"> Home</a></li> 
               <li><a href="./aboutus.php"> About </a></li>
              <li><a href="./Rent.php"> Property</a></li> 
                <li><a href="./contact.php"> Contact Us</a></li> 
                
            </ul>    
        </div>
    </div>
    
    
    
        
       
    
<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->
<body>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class= "log">
                <img src="./include/img/login.png">
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form">
                    <h2>Login</h2>
                    <form>
                        <div class="form-group">
                            <label for="username">Username</label><br>
                            <input type="text" class="form-control" name="username" placeholder="Enter your username">
                        </div><br>
                        <div class="form-group">
                            <label for="password">Password</label><br>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        </div> <br>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="check">
                            <label class="form-check-label" for="check">Remember Me</label>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-submit">Login</button>
                    </form>
                    <div class="form-footer">
                        <p>Don't have an account? <a href="./signup.php">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

    </div>
</body>
</html>