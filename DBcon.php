<?php

$dbcon = mysqli_connect("localhost","root","","gamon");

if(!$dbcon)
{
 die("Error connecting to database" .$dbcon->connect_error);
}


?>