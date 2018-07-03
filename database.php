<?php 
	 $host = "localhost";
    $user = "root";
    $password = "";
    $database = "batch16";
    $connection = mysqli_connect($host, $user, $password, $database);
    
    if ($connection) {
    echo "Database Connected";
}

?>