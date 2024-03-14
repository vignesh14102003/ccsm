<!DOCTYPE html>
<html lang="en">
<head>
<style>
p, button, input {
  font-family: Arial;
  letter-spacing: 3px;
}

button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  background-color: white;
  color: black;
}

.s_ip {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.s_ip:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  background-color: white;
  color: black;
}

h2 {
  font-family: Arial;
  letter-spacing: 3px;
}

hr {
  border: 1px solid black;
}

.box {
  border: 1px solid transparent;
  height: 250px;
  width: 50%;
  margin-top: 50px;
  padding-top: 18px;
}

.box:hover {
  box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
  padding-top: 18px;
}
</style>

</head>
<body>
  

  <center>
    <h2>Log in</h2>
    <hr>
    <form id="loginForm" method="post" action="">
      <p>Authority ID: <input type="text" name="p_id" id="p_id"></p>
      <p>Password: <input type="password" name="pass" id="pass"></p>
      <input type="submit" name="submit" value="submit" class="s_ip">
      <p><a href="register2.php"> Sign up </a></p>
    </form>
  </center>
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
            header("Location: divert.php?pid=$username");
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
