<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Success Page</title>
    <style>
        body {
            font-family: "poppins", sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.5) 20%,rgba(0,0,0,0.5) 20%), url('gif2.gif');
            background-position: center;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #000; /* Change text color to black or your preferred color */
        }

        h3, p {
            margin-bottom: 20px;
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
</head>
<body>
    <div class="success-container">
        <h3>Feedback submitted successfully!</h3>
        <p>Thanks for your feedback.</p>
        <button onclick="goBack()">Go Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
