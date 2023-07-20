<?php

    $user_data = check_login($conn);
    
     
    $_SESSION = $user_data;
    
 if(isset($_SESSION['role']) != "user"){
    unset($_SESSION['role']);
    header("Location: index.php?pg=signin");
}
print_r($_SESSION);
    


require view_path('partials/nav') ;


$tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : '';
?>

<div class = "row container-fluid" style = "height : 100vh ">
    <div class="col-lg-3  " >
        <ul class="list-group pt-5">
        <a href="index.php?pg=user&tab=addbooking">
       
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='addbooking' ? 'active' : ''  ?>">
            <i class="fa fa-plus m-1" aria-hidden="true">  </i> Add Bookings
                
            </li>
        </a>
        <a href="index.php?pg=user&tab=bookings">
       
            <li class="list-group-item d-flex  align-items-center <?= !$tab || $tab =='bookings' ? 'active' : ''  ?>">
            <i class="fa fa-bookmark m-1" aria-hidden="true">  </i>Bookings
                
            </li>
        </a>
        <a href="index.php?pg=user&tab=services">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='services' ? 'active' : ''  ?>">
            <i class="fa fa-cog m-1 " ></i> Services
            
            </li>
        </a> 
        <a href="index.php?pg=user&tab=customerservice">
            <li class="list-group-item d-flex  align-items-center <?= $tab == 'customerservice' ? 'active' : ''  ?>">
            <i class="fa fa-envelope m-1 " > </i> Customer Service
                
            </li>
        </a>
        
        
        </ul>
        <a href="index.php?pg=user&tab=usermanagement">
            <li class="list-group-item d-flex  align-items-center <?=  $tab =='usermanagement' ? 'active' : ''  ?>">
            <i class="fa fa-user m-1" > </i>User Management
            
            </li>
        </a>
    </div>
    
    <!-- <div class="col-9" > -->
    <div class = "border col-lg-9 mt-5"><h4><?= $tab = isset($_GET['tab']) ? strtoupper($_GET['tab']) : '' ?></h4>

    <?php switch (strtolower($tab)) {
            case 'usermanagement':
                require view_path('user/usermanagement');
                break;
            case 'customerservice':
                require view_path('user/customerservice');
                break;
                
            default:
                # code...
                break;
        }
        ?>

    
    </div>
    
        
       
    </div>
    </div>
