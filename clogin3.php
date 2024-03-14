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
    color: #333;
    margin-bottom: 20px;
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

</style>

<script language="javascript">

function checking(){
    if((document.getElementById("p_id").value=="A007") && (document.getElementById("pass").value=="14102003")) {
        window.open("divert.php");
    } else {
        alert("Invalid username or password");
    }
}

</script>

</head>

<body>

<div class="center">
    <div class="login-container">
        <h2>ADMIN LOGIN </h2>
        <hr>
        <input type="text" id="p_id" placeholder="ADMIN ID">
        <input type="password" id="pass" placeholder="PASSWORD">
        <button class="s_ip" onclick="checking()"> SUBMIT </button> 
    </div>
</div>

</body>

</html>