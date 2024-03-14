<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <!-- Add your styles if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            overflow: hidden; /* Prevent scrollbars */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .background {
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.5) 20%,rgba(0,0,0,0.5) 20%), url(gif2.gif);
            background-position: center;
            background-size: cover;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1; /* Place it behind other elements */
        }

        .success-box {
            width: 50%;
            padding: 20px;
            background-color: #ffffff; /* Background color for the box */
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            color: green;
            font-size: 24px;

           
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="success-box">
        <p>THE RECORD IS ADDED SUCCESSFULLY!</p>
        <p>Thanks For Using LCCSM - <h2>LOYOLA COLLEGE'S COMPLAINT MANAGEMENT SYSTEM!!</h2></p>
    </div>
</body>
</html>
