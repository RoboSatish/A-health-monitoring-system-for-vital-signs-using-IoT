<html>
<title> Insert Data Node-1 </title>
</html>
<?php
include "connect.php";
$url = "https://api.thingspeak.com/channels/1088609/feeds.xml?results=1";



$xml = simplexml_load_file($url);
//$channel_name = (string) $xml->name;
//echo $channel_name;
$field1 = $xml->xpath('//feed/field1'); 
foreach ($field1 as $r1)
//echo $r1;
echo "</br>";

$field2 = $xml->xpath('//feed/field2'); 
foreach ($field2 as $r2)
//echo $r2;
echo "</br>";

$field3 = $xml->xpath('//feed/field3'); 
foreach ($field3 as $r3)
//echo $r3;
echo "</br>";
echo "<meta http-equiv='refresh' content='5' />";

date_default_timezone_set("Asia/Kolkata");
$t1=date("d/m/Y h:i:sa");
//echo $t1;

if ($r1=='' ||$r2=='' ||$r3=='' )
{
echo "Value is Retrieving Please wait................!";

}
else{

$sql = "INSERT INTO airpoll11 (id,field1,field2,field3,date1)
VALUES ('','$r1','$r2','$r3','$t1')";

if ($conn->query($sql) === TRUE) {
   echo "Sensor Values Inserted successfully";
 // echo"<script>window.open('welcome.php','_self')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>



