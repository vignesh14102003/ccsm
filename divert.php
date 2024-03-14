
<html>
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

p,button,input{
font-family:Arial;letter-spacing:3px;
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
  font-weight: bold;
}
h2{
font-family:Arial;letter-spacing:3px;
}
hr{
border:1px solid black;
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


</style>
<body>
<center>
<div class="box">
   <div class="center">
    <div class="login-container">
<h2>Choose!</h2><hr>


<p><button onclick="location.href='RejectedComplaints.php'">REJECTED COMPLAINTS</button></p>
<p><button onclick="location.href='solvedComplaints.php'">SOLVED COMPLAINTS</button></p>
<p><button onclick="location.href='PendingComplaints.php'">PENDING COMPLAINTS</button></p>


</div>
</center>
</body>
</html>