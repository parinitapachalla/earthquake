<?php
include('config/db.php');


?>
<!DOCTYPE html>
<html>
<head>
<title>View table</title>
<link rel = "stylesheet" href= "css/jquery-ui.css">
<link rel = "stylesheet" type = text/css  href= "css/bootstrap.css">
<script type = "text/javascript" src = js/query-1.12.4.js></script>
<script type = "text/javascript" src = js/bootstrap.js></script>
<script src = "js/jquery-ui.js"></script>
<script>
    $(function(){
        $("#purchased_date").datepicker();
    });
</script>
<style type = "text/css">
option{
    padding:20px;
}
</style>
</head>

<nav class = "navbar navbar-inverse">
    <div class= "container-fluid">
        <div class="navbar-header col-lg-10">
            <a class= "navbar-brand" href="http://localhost/advancefilterapp">EARTH QUAKE</a>
        </div>
        <div class = "col-lg-2"style = "margin-top:8px";id="bs-example-navbar-collpase-2">
        </div>
    </div>
</nav>
<div class="container">
    <h1>EARTH QUAKE</h1>
    <hr>
    <a href = "index.php" class= "btn btn-pimary">View details</a>
    </hr>

</div>


<div class="col-md-8">
    <table class= "table table-hover">
    <thead>
        <tr>
        <th scope="col">Time</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">depth</th>
        <th scope="col">mag</th>
        <th scope="col">magType</th>
        <th scope="col">nst</th>
        <th scope="col">gap</th>
        <th scope="col">dmin</th>
        <th scope="col">rms</th>
        <th scope="col">net</th>
        <th scope="col">id</th>
        <th scope="col">updated</th>
        <th scope="col">place</th>
        <th scope="col">type</th>
        <th scope="col">horizontalerror</th>
        <th scope="col">deptherror</th>
        <th scope="col">magerror</th>
        <th scope="col">magNst</th>
        <th scope="col">status</th>
        <th scope="col">locationsource</th>
        <th scope="col">magsource</th>
    </tr>
    </thead>
    <tbody>
    
<?php

$sql = "SELECT time,latitude,longitude,depth,mag,magType,nst,gap,dmin,rms,net,id,updated,place,type,horizontalError,depthError,magError,magNst,status,locationSource,magSource FROM all_month";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<th>" . ($row['time']) . '</th>';
    echo "<th>" . ($row['latitude']) . '</th>';
    echo "<th>" . ($row['longitude']) . '</th>';
    echo "<th>" . ($row['depth']) . '</th>';
    echo "<th>" . ($row['mag']) . '</th>';
    echo "<th>" . ($row['magType']) . '</th>';
    echo "<th>" . ($row['nst']) . '</th>';
    echo "<th>" . ($row['gap']) . '</th>';
    echo "<th>" . ($row['dmin']) . '</th>';
    echo "<th>" . ($row['rms']) . '</th>';
    echo "<th>" . ($row['net']) . '</th>';
    echo "<th>" . ($row['id']) . '</th>';
    echo "<th>" . ($row['updated']) . '</th>';
    echo "<th>" . ($row['place']) . '</th>';
    echo "<th>" . ($row['type']) . '</th>';
    echo "<th>" . ($row['horizontalError']) . '</th>';
    echo "<th>" . ($row['depthError']) . '</th>';
    echo "<th>" . ($row['magError']) . '</th>';
    echo "<th>" . ($row['magNst']) . '</th>';
    echo "<th>" . ($row['status']) . '</th>';  
    echo "<th>" . ($row['locationSource']) . '</th>';
    echo "<th>" . ($row['magSource']) . '</th>';
    echo "</tr>";
  }
} else {
  echo "0 results";
}

?>


</tbody>

</table>
</div>
</html>
</body>