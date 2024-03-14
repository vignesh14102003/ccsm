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

.choose-box {

    background-color: rgb(113 113 122);
    border: 1px solid transparent;
    height: 330px;
    width: 50%;
    margin-top: 50px;
    padding-top: 18px;
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 24px;
    font-family: Arial;
    letter-spacing: 3px;
    margin-bottom: 20px;
    text-align: center;
}

hr {
    border: 1px solid black;
    width: 100%;
}

.button-container {

    display: flex;
    flex-direction: column;
    align-items: center;
}

.choose-button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 0;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.4s, color 0.4s;
}

.choose-button:hover {
    background-color: rgb(214 211 209);
    font-weight: bold;
    color: black;
}

</style>
</head>

<body>

<div class="center">
    <div class="choose-box">
        <h2>Choose!!</h2>
        <hr>
        <div class="button-container">
            <p><button class="choose-button" onclick="location.href='clogin2.php'">USER PORTAL</button></p>
            <p><button class="choose-button" onclick="location.href='clogin3.php'">ADMIN PORTAL</button></p>
        </div>
    </div>
</div>

</body>

</html>