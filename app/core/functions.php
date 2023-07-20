<?php
    function view_path($view)
    {
        if(file_exists("../app/views/$view.view.php"))
        {
            return "../app/views/$view.view.php";
        }else
        {
            echo "View '$view' not found";
        }
    }
    function check_login($conn){
        if(isset($_SESSION['USER'])){
            $id = $_SESSION['USER'];
            
            $query = "SELECT * from users where user_id = '$id'";
            $result = mysqli_query($conn, $query);
            
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
                print_r($user_data);
                die;
            }
        }
        header("Location: index.php?pg=signin");
        die;
    }
   

