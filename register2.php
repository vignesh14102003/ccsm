<!DOCTYPE html>
<html lang="en">
<head>
<style>

body{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)20%,rgba(0,0,0,0.5)20%), url(gif2.gif);
    background-position: center;
    background-size: cover;
    height: 100vh;

    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
}


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

.center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-container {
  background-color: rgb(113 113 122);
  padding: 50px;
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
  

  
    <div class="center">
    <div class="login-container">
    <h2>SignUp Page</h2>
    <hr>
    <form id="Register_form" method="post" action="">
      <p>USER_NAME:   <input type="text" name="name" id="p_id"></p>
      <p>AGE:              <input type="text" name="age" id="p_id"></p>
      <p>COLLEGE_ID:      <input type="text" name="p_id" id="p_id"></p>
      <p>PASSWORD:        <input type="password" name="pass" id="pass"></p>
      <input type="submit" name="submit" value="submit" class="s_ip"> 
      
    </form>
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
    $userid = $_POST['p_id'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $age = $_POST['age'];


    $sql = "INSERT INTO `pw_tb`(`user_name`, `password`) VALUES ('$userid','$password')";
    $result = $conn->query($sql);
    $sql2 = "INSERT INTO `user_det`(`name`, `user_id`, `age`) VALUES ('$name','$userid','$age')";
    $result2 = $conn->query($sql2);
    if($result&&$result2){
    echo "The user is registered successfully";

  }
  else{
  echo "There is some error.";
}

    
}

$conn->close();
?>
</body>
</html>
