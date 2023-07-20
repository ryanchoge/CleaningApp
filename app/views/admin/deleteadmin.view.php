<?php require view_path('partials/header'); ?>
       <div class="container-fluid border rounded p-2 m-2   col-lg-4 mx-auto">
        <?php if(!empty($admin_view)) : ?>
            <form method="post"  >
            <h5 class="text-primary "> <i class="fa fa-hamburger"></i> Delete Admin</h5>
            <div class="alert alert-danger text-center">Are you sure you want to delete this Admin?</div>
                <div class="mb-3 ">
                    
                    <label for="productFormControlInput1" class="form-label">Admin Name</label>
                    <input disabled value="<?=set_value('description', $admin_view['adminId']);  ?>" name="description" type="text" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="productFormControlInput1" placeholder="Product Description" autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="barcodeFormControlInput1" class="form-label">Barcode<small class="text-muted">(Optional)</small></label>
                    <input disabled value="<?=set_value('barcode', $row['barcode']);  ?>" name="barcode" type="text" class="form-control <?= !empty($errors['barcode']) ?'border-danger':''?>" id="barcodeFormControlInput1" placeholder="Product barcode" autofocus >
                    <?php if (!empty($errors['barcode'])) :?>
                    <small class="text-danger"><?=$errors['barcode']?></small>
                    <?php endif;?>
                </div>

                    <br>
                    <img class="mx-auto d-block" src="<?= $row['image'] ?> " alt="" style="width:80%; display: inline-block;">
                <br>
                        
                    <button class="btn btn-primary float-end" >Delete</button>
                    <a href="index.php?pg=admin&tab=adminmanagement">
                    <button type="button"class="btn btn-danger">Cancel</button>
                    </a>
        </form>
        <?php else: ?>
            Admin was not found
            <br>
            <a href="index.php?pg=admin&tab=adminmanagement">
                    <button type="button"class="btn btn-danger">Back to Admin Portal</button>
            </a>
        <?php endif;?>
    </div>
<?php require view_path('partials/footer'); ?>