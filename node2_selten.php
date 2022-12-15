<html>
<title> Last 10 Data Node-2 </title>
</html>


<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM airpoll22 ORDER BY id DESC LIMIT 10");
?>

<html>
<head>
	<title>Homepage</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
      
	  <link href = "myfiles/selten.css" rel = "stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta&display=swap" rel="stylesheet">
   
	

   <style>
	h1{
	   font-family: 'Lexend Zetta', sans-serif;
	}
   </style>
	
</head>

<body><br>
<h1 style="color: #F39C12" align="center"><b>Air Pollution, Node-2</b></h1> 
	 <a href="index.html" style="float:right;margin:10px"class="btn btn-outline-light"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
      <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
      <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
     </svg> Go To Home </a>
	<br/><br/>
	<div class="container table_content">
	<table class="table table-striped table-light">
  <thead>
    <tr class="bg-danger">
      <th scope="col">Id</th>
      <th scope="col">Humidity</th>
      <th scope="col">Temperature</th>
      <th scope="col">Smoke</th>
      <th scope="col">Date</th>
     
	  
    </tr>
  </thead>
		<?php
		while($res = mysqli_fetch_array($conn1)) {		
			echo "<tr>";
			
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['field4']."</td>";
			echo "<td>".$res['field5']."</td>";	
			
			echo "<td>".$res['field6']."</td>";	
			echo "<td>".$res['date1']."</td>";	
			
		}
		?>
	</table>	</div>
	

</body>
</html>
