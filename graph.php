<!DOCTYPE html>
<html>
    <head>
<title> Node 1 Graph </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="myfiles/graph.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@700&display=swap" rel="stylesheet">
</head>
<body><br>
<a href="index.html" style="float:right;margin:10px"class="btn btn-outline-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
  <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z"/>
</svg> Go To Home </a><hr>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-6">
                      <div class="sensor_head">
                        <h3> Sensor 1 Values Graph</h3>
                      </div>
               
                 <iframe width="510" height="260" style="border: 1px solid #cccccc;"
                 src="https://thingspeak.com/channels/1088609/charts/1?bgcolor=%23ffffff&color=%23ABF312&dynamic=true
                 &results=60&title=Humidity+Sensor-1&type=line&xaxis=Time&yaxis=Values"></iframe>
            </div>
            <div class="col-md-6">
                       <div class="sensor_head">
                            <h3> Values of First Sensor</h3>   
                      </div>
                      <iframe width="510" height="260" style="border: 1px solid #cccccc;" 
                       src="https://thingspeak.com/channels/1088609/widgets/194566"></iframe>
            </div>
        </div>
        <div class="row col-md-12">
                 <div class="col-md-6">
                      <div class="sensor_head">
                           <h3> Sensor 2 Values Graph</h3>
                      </div>
                       <iframe width="510" height="260" style="border: 1px solid #cccccc;" 
                        src="https://thingspeak.com/channels/1088609/charts/2?bgcolor=%23ffffff&color=%2312C0F3&dynamic=true
                         &results=60&title=Temperature+Sensor-1&type=line&xaxis=Time&yaxis=Values"></iframe>
                 </div>
                 <div class="col-md-6">
                       <div class="sensor_head">
                           <h3> Values of second Sensor</h3>
                       </div>
                      <iframe width="510" height="260" style="border: 1px solid #cccccc;" 
                      src="https://thingspeak.com/channels/1088609/widgets/194567"></iframe>
                 </div>
        </div>
        <div class="row col-md-12">
                 <div class="col-md-6">
                       <div class="sensor_head">
                             <h3> Sensor 3 Values Graph</h3>
                       </div>     
                       <iframe width="510" height="260" style="border: 1px solid #cccccc;" 
                        src="https://thingspeak.com/channels/1088609/charts/3?bgcolor=%23ffffff&color=%2360F312&dynamic=true
                        &results=60&title=Smoke+Sensor-1&type=line&xaxis=Time&yaxis=Values"></iframe>
                 </div>
                 <div class="col-md-6">
                        <div class="sensor_head">
                             <h3> Values of Third Sensor</h3>
                        </div>
                        <iframe width="510" height="260" style="border: 1px solid #cccccc;" 
                         src="https://thingspeak.com/channels/1088609/widgets/194568"></iframe>
                 </div>
        </div>
    </div>




 

 <script src="layout/scripts/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>