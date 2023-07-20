<?php

if(!$conn = mysqli_connect("localhost", "root", "" , "alliancecleaning")){
    die("Failled to connect to the database: ". mysqli_connect_error());
}
