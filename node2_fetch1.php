<html>
<title> Insert Data Node-2 </title>
</html>
<?php
include "connect.php";
$url = "https://api.thingspeak.com/channels/1021106/feeds.xml?results=1";
$xml = simplexml_load_file($url);
//$channel_name = (string) $xml->name;
//echo $channel_name;
$field4 = $xml->xpath('//feed/field4'); 
foreach ($field4 as $r1)
//echo $r1;
echo "</br>";

$field5 = $xml->xpath('//feed/field5'); 
foreach ($field5 as $r2)
//echo $r2;
echo "</br>";

$field6 = $xml->xpath('//feed/field6'); 
foreach ($field6 as $r3)
//echo $r3;
echo "</br>";
echo "<meta http-equiv='refresh' content='5' />";

date_default_timezone_set("Asia/Kolkata");
$t1=date("Y/m/d h:i:sa");

if ($r1=='' ||$r2=='' ||$r3=='' )
{
echo "Value is Retrieving Please wait................!";

}
else{
//echo $t1;

$sql = "INSERT INTO airpoll22 (id,field4,field5,field6,date1)
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



