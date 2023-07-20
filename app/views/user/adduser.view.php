<?php require view_path('partials/header'); ?>
       <div class="container-fluid border rounded p-2 m-2   col-lg-4 mx-auto " style="background-image: linear-gradient(to bottom, #FFD0D0, #C1ECE4);">
            <form method="post" enctype="multipart/form-data" >
            <center><h5  style="color: #1B6B93"> <i class="fa fa-user m-3"></i> Add User</h5></center>
                <div class="mb-3 ">
                    
                    <label for="productFormControlInput1" class="form-label">Admin Name</label>
                    <input name="username" type="text" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="productFormControlInput1"  autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="productFormControlInput1" class="form-label">Admin Id</label>
                    <input name="userId" type="number" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="productFormControlInput1"  autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="productFormControlInput1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="productFormControlInput1" autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="productFormControlInput1" class="form-label">Confirm Password</label>
                    <input name="confirmpassword" type="password" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="productFormControlInput1" autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <br>
                
                    <button class="btn btn-primary float-end" style="background-color: #1B6B93">Save</button>
                    <a href="index.php?pg=admin&tab=adminmanagement">
                    <button type="button"class="btn btn-danger">Cancel</button>
                    </a>
        </form>
    </div>
<?php require view_path('partials/footer'); ?>