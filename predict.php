<!DOCTYPE html>
<html>
<title> Select Data Node-1 </title>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href = "predict.php">Air Pollution</a>
  <form method="POST" Action="predict.php">
        Select a Date : <input type="text" name="temp" >
       
        <input class="btn btn-outline-success" type="submit" />
		 </form>
		 <a href="index.html" style="float:right;margin-right:0px;"class="btn btn-outline-success"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
          <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
          <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
          </svg> Go To Home </a>
</nav>




</body>
 </html>
        
    

<?php
//including the database connection file
include_once("connect.php");
$q1=$_POST['temp'];

echo "<table border='1' class='table1'>";
$conn1 = mysqli_query($conn, "SELECT * FROM airpoll11 WHERE date1 LIKE '%$q1%' ");
$num_rows = mysqli_num_rows($conn1);

//////////

echo "<tr>";
echo "<th>";
echo "Total Record on $q1 is :";
echo "</th>";
echo "<th>";
echo "Average Humidity:";
echo "</th>";

echo "<th>";
echo "Tommorow Humidity :";
echo "</th>";



echo "<th>";
echo "Maximum Humidity:";
echo "</th>";
echo "<th>";
echo "Minimum Humidity:";
echo "</th>";




echo "<th>";
echo "Average Temperature:";
echo "</th>";
echo "<th>";
echo "Tommorow Temperature:";
echo "</th>";
echo "<th>";
echo "Maximum Temperature:";
echo "</th>";

echo "<th>";
echo "Minimum Temperature:";
echo "</th>";

echo "<th>";
echo "Average Gas:";
echo "</th>";

echo "<th>";
echo "Maximum Gas:";
echo "</th>";

echo "<th>";
echo "Minimum Gas:";
echo "</th>";
echo "</tr>";



echo "<td>";
echo "$num_rows";
echo "</td>";


$conn2 = mysqli_query($conn, "SELECT AVG(field1) FROM airpoll11 WHERE date1 LIKE '%$q1%' ");
$row1 = mysqli_fetch_array($conn2);


echo "<td>";
echo $row1[0];
echo "</td>";


$h1=$row1[0] + 3;
$h2=$row1[0] - 3;


echo "<td>";
echo (int)$h2;
echo "-";
echo (int)$h1;
echo "</td>";

/////////////////

$conn22 = mysqli_query($conn, "SELECT MAX(field1),MIN(field1) FROM airpoll11 WHERE date1 LIKE '%$q1%' ");
$row11 = mysqli_fetch_array($conn22);
///////


echo "<td>";
echo $row11[0];
echo "</td>";



echo "<td>";
echo $row11[1];
echo "</td>";

$conn3 = mysqli_query($conn, "SELECT AVG(field2), MAX(field2),MIN(field2) FROM airpoll11 WHERE date1 LIKE '%$q1%' ");
$row2 = mysqli_fetch_array($conn3);


echo "<td>";
echo $row2[0];
echo "</td>";

$t1= $row2[0] + 3;
$t2= $row2[0] - 3;

echo "<td>";
echo (int)$t2;
echo "-";
echo (int)$t1;
echo "</td>";

////////////////////




echo "<td>";
echo $row2[1];
echo "</td>";


echo "<td>";
echo $row2[2];
echo "</td>";

$conn4 = mysqli_query($conn, "SELECT AVG(field3),MAX(field3),MIN(field3) FROM airpoll11 WHERE date1 LIKE '%$q1%'");
$row3 = mysqli_fetch_array($conn4);

echo "<td>";
echo $row3[0];
echo "</td>";

///////////////



echo "<td>";
echo $row3[1];
echo "</td>";


echo "<td>";
echo $row3[2];
echo "</td>";








//$conn2 = mysqli_query($conn, "SELECT CAST(field1 as UNSIGNED) FROM airpoll11 WHERE date1 LIKE '%$q1%' ");
//echo "$conn2";
//$conn1 = mysqli_query($conn, "SELECT * FROM airpoll11 ORDER BY id ASC");
?>

<html>
<head>
	<title>Homepage</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
	  <script src="js/jquery-3.4.1.js"></script> 
	 
      <style type="text/css">
      	body{
		
       background-image: url("images/bg3.jpg");
       background-size: cover;
	
	}
	.table_content{
		padding-top: 3px;
		
	}
	.nav{
		float: right;
		margin-right: 30px;
	}
   .navbar{
	   color:#fff;
	   padding-bottom:10px;
   }
   .table1{
	   
	   background-color:#0b2e5e;
	   color: #fff;
	   margin-bottom:5px;
	   border: 1px solid #fff;
	   
	 
   }
   .table2{
	   margin: 5px 5px 5px 5px;
	   border: 2px solid blue;
   }

	
      </style>
	
</head>

<body>
	<div class="container table_content">
	<table class="table table-striped table-light table2">
  <thead>
    <tr style="background-color:#945503;color:#fff">
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
			
			
			
			echo "<td>".$res['field1']."</td>";
			echo "<td>".$res['field2']."</td>";	
			
			echo "<td>".$res['field3']."</td>";	
			echo "<td>".$res['date1']."</td>";	
			
			//$s3 =array ($s2);
			// $total=0;
			
			$s1= $res['field1'];
			$s2=(int)$s1;
			
				//echo $s2/2;
				//echo "</br>";
				

			
		}
		

		
		
			/*	$result= mysqli_query($conn,"SELECT AVG($s2) AS average FROM airpoll11");	

				$row = mysqli_fetch_assoc($result); 

				$average = $row['average'];

				echo ("This is the average: $average");
				
				
				$sum=0;
	
for ($i=1; $i<=100; $i++)
	
{
  	 
 $sum=$sum+$i;   
	
} 
	
echo $sum;
		*/
	


		

		?>
	</table>	</div>
	

</body>
</html>
