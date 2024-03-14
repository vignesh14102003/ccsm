<?php
// config.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "upsc";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// feedback_form.php
@include 'config.php';

session_start();

// Check if the feedback form is submitted
if(isset($_POST['submit_feedback']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    // Insert the feedback into the database
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    $insert_feedback = "INSERT INTO feedback (user_id, username, feedback_text, created_at) VALUES ('$user_id', '$username', '$feedback', NOW())";
    
    if (mysqli_query($conn, $insert_feedback)) {
        $success_message = 'Feedback submitted successfully!';
    } else {
        echo "Error: " . $insert_feedback . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
  
    body {
      font-family: "poppins", sans-serif;
      margin: 0;
      padding: 0;
      background-color: white;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <!-- Feedback Form -->
        <form action="" method="post">
            <h3>Provide Feedback</h3>
            <?php
            if(isset($success_message)){
                echo '<span class="success-msg">'.$success_message.'</span>';
            }
            ?>
            <textarea name="username" placeholder="enter your name" ></textarea>
            <textarea name="feedback" rows="4" placeholder="Enter your feedback"></textarea>
            <input type="submit" name="submit_feedback" value="Submit Feedback" class="form-btn">
        </form>

        <p>Go back to <a href="user_page.php">user page</a></p>
    </div>
</body>
</html>