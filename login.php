<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	echo $_SESSION['welcomeMessage'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #663399; /* Purple */
        }
        .login-container .fields {
            margin-bottom: 15px;
        }
        .login-container .fields input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            color: #663399; /* Purple */
        }
        .login-container .fields input::placeholder {
            color: #663399; /* Purple */
        }
        .login-container #loginBtn {
            background-color: #b8860b; /* Warm gold */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-container #loginBtn:hover {
            background-color: #daa520; /* Darker warm gold */
        }
        .login-container a {
            display: inline-block;
            margin-top: 15px;
            color: #663399; /* Purple */
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .login-container a:hover {
            color: #b8860b; /* Warm gold */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Here</h2>
        <form action="handleForm.php" method="POST">
            <div class="fields">
                <p><input type="text" placeholder="Username" name="username" required></p>
                <p><input type="password" placeholder="Password" name="password" required></p>
                <p><input type="submit" value="Login" id="loginBtn" name="loginBtn"></p>
            </div>
        </form>
        <a href="register.php">Register</a>
    </div>
</body>
</html>
