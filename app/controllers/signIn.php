<?php
require view_path('auth/signin');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['userId']) && !empty($_POST['password'])) {
        $userId = $_POST['userId'];
        $password = $_POST['password'];
        $query = "SELECT user_id, role FROM users WHERE user_id = $userId && password = $password limit 1";
        $result = mysqli_query($conn, $query);
        
        if($result && mysqli_num_rows($result) > 0){
            while($user_data = mysqli_fetch_assoc($result)){
            if($user_data['role'] == 'user'){
                $_SESSION['USER'] = $user_data['user_id'];
                
                header("Location: index.php?pg=user");
            }else if($user_data['role'] == 'admin'){
                $_SESSION['USER'] = $user_data['user_id'];
                header("Location: index.php?pg=admin");
            }
            }
        }
        else{
            echo("Wrong username or password");
        }
        

        exit;
    } else {
        echo "UserID or Password cannot be empty";
    }
}
?>


