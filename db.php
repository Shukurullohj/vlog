<?php


    $server = "sql304.epizy.com";
    $username = "epiz_32748514";
    $password = "odqYiOQlJusm";
    $dbname = "epiz_32748514_myblog";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able to establish database connection</h3>";
    }
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

  


?>