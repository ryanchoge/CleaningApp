<?php
require view_path('admin/addadmin');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // if(isset($_POST['signUp'])){
        $userId = $_POST['userId'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmpassword'];
    // }

    
    if(!empty($userId) && !empty($userId)&& !empty($password)){
        if($password != $confirmPassword){
            echo("Passwords do not match");
            die;
        }
       $query = "INSERT INTO users (user_id, username,password,role) VALUES ('$userId','$username','$password','admin')";
       print_r($query);
       $result = mysqli_query($conn, $query);
       if($result ){
        echo("Success");
        header("Location: index.php?pg=admin&tab=adminmanagement");
       }
        
    }else{
        echo("All fields must be filled");
    }
}