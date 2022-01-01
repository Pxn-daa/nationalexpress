<?php 

$server = "sql209.epizy.com";
$user = "epiz_28233671";
$pass = "buIjAvqe9hm0p";
$database = "epiz_28233671_yes";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>