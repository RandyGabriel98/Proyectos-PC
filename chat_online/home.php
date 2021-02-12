<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    background-color: #5F9EA0;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #808080;
	}
	.display-chat{
		height:300px;
		background-color:#FF4500;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #FF4500;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>Bienvenido <span style="color:#000000;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
	<label>Clic abajo para ingresar al chat</label><br>
	<br><br>
	<a href="chatpage.php" class="btn btn-primary">Abre el chat</a>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>