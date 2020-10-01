<!-- File: db.php
Owner: Rashmi B Revanasiddaiah
Date: 30/09/2020
-->

<!-- In db.php we create a connection to the eventsdb database within the locally created server-->

<?php
var_dump($_POST);

$conn = mysqli_connect("localhost","Rashmi", "comp606","eventsdb" );

if(mysqli_connect_errno()){
    echo"</br></br> Failed to connect to MYSQL: ".mysqli_connect_error();
    exit();
}
?>
