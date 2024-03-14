<html>
<html>

<head>

<style>
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
}

h2{
font-family:Arial;
letter-spacing:3px;
}

hr{
border:1px solid black;
}

.box{
border:1px solid transaprent;
height:250px;
width:50%;
margin-top:50px;
padding-top:18px;
}

.box:hover{
box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
padding-top:18px;
}

</style>

<script language="javascript">

function checking(){
if((document.getElementById("p_id").value=="A007") && (document.getElementById("pass").value=="14102003"))

{
window.open("divert.php");
}

else{
alert("Invalid username or password");
}

}

</script>

</head>

<body>

<center>


<h2>LOG IN PAGE </h2><hr>
<p> ADMIN ID:     <input type="text" id="p_id"></p>
<p> PASSWORD:   <input type="password" id="pass"></p>

<p><button onclick="checking()"> Enter </button> </p>



</center>
</body>
</html>