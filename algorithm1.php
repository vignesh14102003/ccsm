<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccsm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$accussion = $_POST["accussion"];  
$accust = $_POST["accust"];  
$case_det = $_POST["case_det"]; 



$sc = 0;
$case1 = array("misbehave", "irresponsible", "sexual harassment");
$case2 = array("theft","cheating","unfair practices","Service issues","hurtful");
foreach ($case1 as $c){
if(strpos($accussion, $c) !== false){
$sc = 50;
}
}
foreach ($case2 as $c){
if(strpos($accussion, $c) !== false){
$sc = 30;
}
}
$sql = "INSERT INTO `complaint_tb`( `title`, `registered_date`, `score`, `case_details`, `AccustName`) VALUES ('$accussion',sysdate(),'$sc','$case_det','$accust')";


if ($conn->query($sql) === TRUE) {
    // Redirect to a new page with a success message
    header("Location: success_page.php");
    exit(); // Make sure to exit after redirecting
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>