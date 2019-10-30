<?php
   

   $connection = mysqli_connect('localhost:3308', 'root', '', 'trip');  
    if(!$connection) {
        die("Database connection failed");
    }