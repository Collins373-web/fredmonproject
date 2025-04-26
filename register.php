<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Registration Page</title>  
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

input[type="text"],  
input[type="text"],  
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
    <a href="#Home">Home</a>  
    <a href="#Login">Login</a> 
    <a href="#Sign up">Sign up</a>
    <a href="#About">About</a>  
    <a href="#Services">Services</a>  
    <a href="#Contact">Contact</a>  
    <input type="text" placeholder="Search..." name="search" style="padding-top:5px; padding-left: 10px;margin-left: 25px; margin-top: 15px;height:40px;width: 300px;">  
        <button type="submit" style="height: 40px;">🔍</button>
</div> 
    
    <div class="container">  
        <form action="#" method="post"> 
            <h2>Create Account</h2>  
            <div class="form-group">  
                <label for="firstname">Firstname</label>  
                <input type="text" id="firstname" name="firstname" required>  
            </div>  
            <div class="form-group">  
                <label for="lastname">Lastname</label>  
                <input type="text" id="lastname" name="lastname" required>  
            </div>  
            <div class="form-group">  
                <label for="phone">Phone Number</label>  
                <input type="phone" id="tel" name="phone" required>  
            </div>  
            <div class="form-group">  
                <label for="email">Email Address</label>  
                <input type="email" id="email" name="email" required>  
            </div>  
            <button type="submit" class="submit-btn">Register</button>  
        </form>  
    </div>  
    <?php
require 'db4.php';

if ($_SERVER["REQUEST_METHOD"] =="POST") {
            $firstname=htmlspecialchars($_POST['firstname']); 
            // Sanitize input to prevent XSS
            $lastname = htmlspecialchars($_POST['lastname']); // Sanitize input to prevent XSS
            $phone = htmlspecialchars($_POST['phone']); // Sanitize input to prevent XSS
            $email=htmlspecialchars($_POST['email']); 
            // Sanitize input to prevent XSS
            
    $stmt = $conn->prepare("INSERT INTO register (firstname, lastname, phone, email) VALUES (?,?,?,?)");
    
    $stmt->bind_param("ssss", $firstname, $lastname, $phone, $email,);
    
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