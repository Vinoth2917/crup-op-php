<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","crud_operation");
$conn=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$conn){
    die("connection failed");
}
// else{
//     echo "Connected Successfully";
// }
?>