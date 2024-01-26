<?php
    //connect to the database
    /* The following statements set up the 4 variables needed to
    connect to my account on the MySQL database on nuwebspace.*/
    $servername = 'nuwebspace_db';
    $username = 'w23028755';
    $password = 'efwP+XiP+i2q';
    $dbname = 'w23028755';
    $conn = mysqli_connect($servername,$username, $password, $dbname)
    or die("Can not connect to DB");
    // echo "Successful connection";

  
?>