<?php
$db_host = "localhost";
$db_user = "mydata";
$db_password = "student";
$db_name = "mydata";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$conn)
{
    echo "disconnect";
}
?>  