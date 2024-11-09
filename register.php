<?php
    include "connection.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;

            background-image: url('https://www.edigitallibrary.com/img/libraryBooks.jpg'); 
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
            
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
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
    </style>
</head>
<body>

<div class="container">
    <h2>Library Registration</h2>
    <form action="" method="post">

        <label for="ktu_id">Library ID(Username):</label>
        <input type="text" id="ktu_id" name="ktu_id" required>

        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>


        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required pattern="(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{5,}":>

        <label for="phone_number">Phone Number:</label> <br>
        <input type="text" id="phone_number" name="phone_number" required pattern="[0-9]{10}">
        <br>


        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="membership_type">Membership Type:</label>
        <select id="membership_type" name="membership_type" required>
            <option value="staff">Staff</option>
            <option value="student">Student</option>
            
        </select>

        <input type="submit"   name="Register"  value="Register">
    </form>
</div>
<a href="index.php" class="button">HOME</a>

<?php
    
    if(isset($_POST['Register']))
    {
        mysqli_query($db,"INSERT INTO `registration` VALUES('$_POST[ktu_id]', '$_POST[name]', '$_POST[email]', '$_POST[password]' , '$_POST[phone_number]' , '$_POST[dob]' , '$_POST[membership_type]'   ) ;");

    }

?>      <script type="text/javascript">
        alert("Registration successful");
        </script>



</body>
</html>
