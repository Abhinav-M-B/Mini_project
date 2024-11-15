<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student/Staff login Login</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;

            background-image: url('https://www.edigitallibrary.com/img/libraryBooks.jpg'); 
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
            
        }

        
        
        .login-container {
            background-color: #fff;
            padding: 60px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #218838;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }


        .button {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px 20px;
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
        }
        .button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        
    </style>
   
    
    
</head>
<body>

<div class="login-container">
    <h2>Student/Staff Login</h2>
    <form action="/admin-dashboard" method="POST">
        <input type="text" class="input-field" name="username" placeholder="Username" required>
        <input type="password" class="input-field" name="password" placeholder="Password" required>
        <button type="submit" class="login-btn">Login</button>
    </form>
    <div class="forgot-password">
        <a href="forpw.html">Forgot Password?</a>
    </div>
</div>
<a href="index.php" class="button">HOME</a>

</body>
</html>
