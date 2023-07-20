<?php
require view_path('auth/signup');
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['signUp'])){
        $userId = $_POST['userId'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmpassword'];
    }

    
    if(!empty($userId) && !empty($userId)&& !empty($password)){
        if($password != $confirmPassword){
            echo("Passwords do not match");
        }
       $query = "INSERT INTO users (user_id, username,password,role) VALUES ('$userId','$username','$password','user')";
       print_r($query);
       $result = mysqli_query($conn, $query);
       if($result){
        echo("Success");
       }
        
    }else{
        echo("All fields must be filled");
    }
}


?>

