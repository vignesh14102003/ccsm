<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  width: 100%;
  background: linear-gradient(to top, rgba(0,0,0,0.5)20%,rgba(0,0,0,0.5)20%), url(gif2.gif);
  background-position: center;
  background-size: cover;
  height: 100vh;

  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.center {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.login-container {
  background-color: rgb(113 113 122);
  padding: 20px;
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h2 {
  font-size: 24px;
  color: rgb(2 6 23);
  margin-bottom: 20px;
  font-weight: bold;
}

hr {
  border: 1px solid #333;
  width: 100%;
}

input[type="text"],
input[type="password"] {
  background-color: rgb(226 232 240);
  width: 100%;
  padding: 10px;
  margin: 8px 0;
  box-sizing: border-box;
}

.s_ip {
  background-color: #333;
  border: none;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 0;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.s_ip:hover {
  background-color: rgb(229 231 235);
  font-weight: bold;
  color: rgb(3 7 18);
  
}

.register-link {
  text-align: center;
  margin-top: 10px;
}

.register-link a {
  color: #333;
  text-decoration: none;
  color: rgb(2 6 23);
  font-weight: bold;
}

.register-link a:hover {
  text-decoration: underline;
  color: white;
}
</style>

</head>
<body>
  <div class="center">
    <div class="login-container">
      <h2>USER LOGIN</h2>
      <hr>
      <form id="loginForm" method="post" action="">
        <input type="text" name="p_id" id="p_id" placeholder="USER ID">
        <input type="password" name="pass" id="pass" placeholder="PASSWORD">
        <input type="submit" name="submit" value="Login" class="s_ip">

        <button class="s_ip" ><a href="javascript:history.back()">Back to Login</button>

      </form>
      <div class="register-link">
        <a href="register2.php">REGISTER!</a>
      </div>
    </div>
  </div>




   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccsm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['p_id'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM `pw_tb` WHERE `user_name` = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            header("Location: landing_page.html ?pid=$username");
            // Redirect or perform other actions after successful login
        } else {
            echo '<center><p style="color:red;">Invalid username or password</p></center>';
        }
    } else {
        echo '<center><p style="color:red;">Invalid username or password</p></center>';
    }
}

$conn->close();
?>
</body>
</html>