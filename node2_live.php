

<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM airpoll22 ORDER BY id DESC LIMIT 1");
?>

<html>
<head>
	<title>Live Data-2</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	  <link href = "css/bootstrap.css" rel = "stylesheet">
	   <script src="js/jquery-3.4.1.js"></script> 
	   <style type="text/css">
	   body{
		background-image: url('back4.jpg');
	}

    .table_content{
              padding-top: 3px;
              
	           }
	.nav{
		float: right;
		margin-right: 30px;
	}
  .heading{
      border: 2px solid olivedrab;
      padding-bottom: 10px;
      margin: 5px 5px 0px 5px;
  }
  .heading img{
      margin-left: 29%;
  }
  .table_content th{
	background-color: #b71540;
      color: #fff;
      
  }
      </style>
	
</head>

<body>
    <div class="heading">
		   <h1 style="color: #F39C12" align="center"><b>Air Pollution Live Value</b></h1>
		   <a href="index.html" style="float:right;margin:10px"class="btn btn-outline-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
          <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
          <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
          </svg> Go To Home </a><br><br>
		   <img src="as.png" height="400" width="700"></img>
   </div>
		 <br/><br/>
     
	<div class="container table_content">
	<table class="table table-striped table-light">
  <thead>
    <tr class="bg-warning">
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
			
				echo "</table>";
			echo "</div>";
			
			echo "</br>";echo "</br>";echo "</br>";echo "</br>";
			echo "<h2 align='center'> Indications of Air Sensors </h2>";
			
			echo "<div class='container table_content'>";
			echo "<table class='table table-striped table-light'  align='center'>";
			
			
			echo "<th>  Indications </th>";
			
			$s1= "$res[field4]";
		if ($s1>20 && $s1<39)
		{
		echo "<tr>";
		echo "<td>Humidity is ok</td>";
		echo "</tr>";
		}
		else if ($s1>40 && $s1<46)
		{
		echo "<tr>";
		echo "<td> More humidity </td>";
		echo "</tr>";
		}
		else if ($s1>47)
		{
		echo "<tr>";
		echo "<td> <font color='Red'> Humidity Level increases, Take Precautions </font></td>";
		echo "</tr>";
		}
		
		
		$s2= "$res[field5]";
		if ($s2>20 && $s2<25)
		{
		echo "<tr>";
		echo "<td>Temperature is ok</td>";
		echo "</tr>";
		}
		else if ($s2>26 && $s2<40)
		{
		echo "<tr>";
		echo "<td>Temperature is More</td>";
		echo "</tr>";
		}
		else if ($s2>41)
		{
		echo "<tr>";
		echo "<td> <font color='Red'> Temperature Level increases, Take Precautions </font></td>";
		echo "</tr>";
		}
		
		
		$s3= "$res[field6]";
		if ($s3<120)
		{
		echo "<tr>";
		echo "<td>Smoke Pollution is ok</td>";
		echo "</tr>";
		}
		else if ($s3 >50 )
		{
		echo "<tr>";
		echo "<td> <font color='Red'> Highly Polluted </font> </td>";
		echo "</tr>";
		}
		echo "</div>";
			
		}
		?>
	
	

</body>
</html>
