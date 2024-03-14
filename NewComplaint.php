<!DOCTYPE html>
<html>
<head>
    <title>File A New Complaint</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.5)20%,rgba(0,0,0,0.5)20%), url(gif2.gif);
            background-position: center;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        button {
            background-color: grey;
            border: none;
            color: white;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
            height: 60px;
            width: 100%;
        }
        
        button:hover {
            background-color: white;
            color: black;
        }
        
        p {
            color: black;
            font-family: "Inknut Antiqua-Regular", Helvetica;
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 5px;
        }
        
        input, textarea {
            background-color: #ffffff;
            border: 1px solid #000000;
            height: 35px;
            font-size: 20px;
            width: calc(100% - 10px); /* Adjusted width */
            margin-bottom: 10px;
            padding: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>To File A New Complaint</h1>
    <form action="algorithm1.php" method="post">
        <p>Enter a Complaint Title:</p>
        <input type="text" name="accussion">
        <p>Enter the accust name:</p>
        <input type="text" name="accust">
        <p>Enter the case details:</p>
        <textarea name="case_det">Enter the case details</textarea>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
