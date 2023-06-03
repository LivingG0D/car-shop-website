<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $name = $_POST['name'];
  $last_name = $_POST['last_name'];
  $password = $_POST['password'];

  
  $conn = new mysqli('127.0.0.1', 'root', '', 'divar2');
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  
  $sql = "INSERT INTO user (name, last_name, password) VALUES ('$name', '$last_name', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo 'User registered successfully';
  } else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
  }

  
  $conn->close();
}
?>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];

    
    echo '<h1>Welcome, ' . htmlspecialchars($name) . '!</h1>';
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register User</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #244d61;
    }
    form {
      background-color: #eaeded;
      border-radius: 5px;
      padding: 25px;
      margin: 20px auto;
      max-width: 500px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      margin-bottom: 20px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1) inset;
    }
    input[type="submit"] {
      background-color: #75e2ff;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #5689c0;
    }
    body {
      font-family: sans-serif;
      background-color: #5b8291;
    }
    h1 {
      text-align: center;
      margin-top: 125px;
      color:#eaebed;
    }
    .s {
            
            background-color:  #75e2ff;
            color: black;
            width: 30%;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 22px;
            border-radius: 7px;
            
        }
        .s:hover {
  background-color:#eaeded;
  transition: 0.9s;
  font-family: sans-serif;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
  </style>
</head>
<body>
  <form method="post" action="sign in.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Register">
    <p>you have an account? <a href="login.php">login now</a>.</p>
  </form>
  <div align="center">
  <a href="home page.php" class="s">GO Home Page</a>
  </div>
  </div>
  
</body>
</html>