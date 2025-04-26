<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Page</title>  
    <link rel="stylesheet" href="styles.css">  
    <style>
    * {  
    box-sizing: border-box;  
}  

        .navbar {  
            background-color: lime;  
            overflow: hidden;
                
        }  
        .navbar a {  
            float: left;  
            display: block;  
            color: white;  
            text-align: center;  
            padding: 20px 10px;  
            text-decoration: none;  
        }  
        .navbar a:hover {  
            background-color: white;  
            color: black; 
            padding-top:25px;
        
        }  
        .navbar a.active {  
            background-color: lime;  
            color: white;
            font-size: 25px;
        }  
body {  
    font-family: Arial, sans-serif;  
    background-color: #f0f0f0;  
    margin: 0;  
    padding: 0;  
}  

.container {  
    width: 100%;  
    max-width: 400px;  
    margin: 100px auto;  
    padding: 20px;  
    background-color: #fff;  
    border-radius: 8px;  
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
}  

h2 {  
    text-align: center;  
    color: #333;  
}  

.form-group {  
    margin-bottom: 15px;  
}  

label {  
    display: block;  
    margin-bottom: 5px;  
    color: #555;  
}  

input[type="username"],  
input[type="password"],  
input[type="phone"],
input[type="email"] {  
    width: 100%;  
    padding: 10px;  
    border: 1px solid #ccc;  
    border-radius: 4px;  
}  

input:focus {  
    border-color:lime;  
    outline: none;  
}  

.submit-btn {  
    width: 100%;  
    padding: 10px;  
    background-color: lime;  
    color: #fff;  
    border: none;  
    border-radius: 4px;  
    cursor: pointer;  
    font-size: 16px;  
}  

.submit-btn:hover {  
    background-color: lime;  
}
        
    
    </style>
</head>  
<body> 
    <div class="navbar">  
    <a href="#fredmon" class="active"><b>FREDMON</b> <b style="color: blue;">TECHNOGIES</b></a>  
    <a href="C:\xampp\htdocs\project.php/#Home">Home</a>  
    <a href="C:\xampp\htdocs\logins.php/#Login">Login</a> 
    <a href="C:\xampp\htdocs\register.php/#Sign up">Sign up</a>
    <a href="#About">About</a>  
    <a href="#Services">Services</a>  
    <a href="#Contact">Contact</a>  
    <input type="text" placeholder="Search..." name="search" style="padding-top:5px; padding-left: 10px;margin-left: 25px; margin-top: 15px;height:40px;width: 300px;">  
        <button type="submit" style="height: 40px;">🔍</button>
</div> 
    <div class="container">  
        <form action="#" method="post">  
            <h2>Login To Your Account</h2>  
            <div class="form-group">  
                <label for="username">Username</label>  
                <input type="username" id="username" name="username" required>  
            </div>  
            <div class="form-group">  
                <label for="password">Password</label>  
                <input type="password" id="password" name="password" required>  
            </div>  
            <button type="submit" class="submit-btn">Login</button>  
            
                <p>Don't have an account? <a href="#" style="color:lime;">Sign up</a></p>  
        </form>  
    </div>  
    <?php
require 'db4.php';

if ($_SERVER["REQUEST_METHOD"] =="POST") {
            $username= htmlspecialchars($_POST['username']); 
            // Sanitize input to prevent XSS
            $password = htmlspecialchars($_POST['password']); // Sanitize input to prevent XSS
            
     
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?,?)");
    
    $stmt->bind_param("ss", $username, $password);
    
           if ($stmt->execute()) {
        echo "<p>Data successfully submitted!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close the statement
    $stmt->close();

    }
    ?>
    </body>  
</html>  
