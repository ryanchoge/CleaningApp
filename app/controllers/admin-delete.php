<?php
require view_path ('admin/deleteadmin');
$admin_id = $_GET['adminId'];

    $query = "DELETE from users where user_id = '$admin_id' ";
    $result = mysqli_query($conn,$query);
    if($result){
        header("Location: index.php?pg=admin&tab=adminmanagement");
    }
    else{
        echo("Failed");
    }
