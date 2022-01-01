<?php
include 'config.php';
$query = "SELECT id FROM users ORDER BY id";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
alert("User Count Is ". $row);
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
