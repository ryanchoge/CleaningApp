<?php

    //$user_data = check_login($conn);  
    //$_SESSION = $user_data;
    print_r($_SESSION);
    

// if($_SESSION['role'] != "admin"){
//     unset($_SESSION['role']);
//     header("Location: index.php?pg=signin");
// }
 require view_path('partials/nav');$tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : '';
 
?>

<div class = "row container-fluid " style = "height : 100vh ">
    <div class="col-lg-3 " >
        <ul class="list-group pt-5">
       
        <a href="index.php?pg=admin&tab=addbooking">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='addbooking' ? 'active' : ''  ?>"><i class="fa fa-plus m-1" aria-hidden="true"></i> 
               Add Bookings
                
            </li>
        </a>
        <a href="index.php?pg=admin&tab=booking">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='booking' ? 'active' : ''  ?>">
            <i class="fa fa-bookmark m-1" aria-hidden="true"></i>  
                Bookings
                
            </li>
        </a>
        
        <a href="index.php?pg=admin&tab=users">
            <li class="list-group-item d-flex  align-items-center  <?=  $tab =='users' ? 'active' : ''  ?>">
            <i class="fa fa-users m-1" aria-hidden="true"></i> 
                Users
                
            </li>
        </a>
        <a href="index.php?pg=admin&tab=services">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='services' ? 'active' : ''  ?>">
            <i class="fa fa-cog m-1" aria-hidden="true"></i> 
                Services 
                
            </li>
        </a>
        <a href="index.php?pg=admin&tab=customerservice">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='customerservice' ? 'active' : ''  ?>">
            <i class="fa fa-envelope m-1" aria-hidden="true"></i> 
                Customer Service
                
            </li>
        </a>
        <a href="index.php?pg=admin&tab=adminmanagement">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='adminmanagement' ? 'active' : ''  ?>">
            <i class="fa fa-user m-1" aria-hidden="true"></i> 
                Admin Management
                
            </li>
        </a>
        
        </ul>
    </div>
    
    <div class = "border col mt-5">
            <h4 style="color : #1B6B93"><?= $tab = isset($_GET['tab']) ? strtoupper($_GET['tab']) : '' ?></h4>
   
    
    <hr>
        <?php switch (strtolower($tab)) {
            case 'users':
                require view_path('user/userlist');
                
                break;
                case 'booking':
                require view_path('booking/bookinglist');
                break;
                case 'adminmanagement':
                    require view_path('admin/adminlist');
                    break;
                
            default:
                # code...
                break;
        }
        ?>
        
    </div>
</div>
