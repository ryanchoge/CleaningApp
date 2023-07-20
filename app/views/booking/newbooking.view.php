<?php require view_path('partials/header'); ?>
       <div class="container-fluid border rounded p-2 m-2   col-lg-4 mx-auto">
            <form method="post" enctype="multipart/form-data" >
            <h5 class="text-primary "> <i class="fa fa-hamburger"></i> Add Product</h5>
                <div class="mb-3 ">
                    
                    <label for="productFormControlInput1" class="form-label">Product Description</label>
                    <input name="description" type="text" class="form-control <?= !empty($errors['description']) ?'border-danger':''?>" id="productFormControlInput1" placeholder="Product Description" autofocus >
                    <?php if (!empty($errors['description'])) :?>
                    <small class="text-danger"><?=$errors['description']?></small>
                    <?php endif;?>
                </div>
                <div class="mb-3 ">
                    
                    <label for="barcodeFormControlInput1" class="form-label">Barcode<small class="text-muted">(Optional)</small></label>
                    <input name="barcode" type="text" class="form-control <?= !empty($errors['barcode']) ?'border-danger':''?>" id="barcodeFormControlInput1" placeholder="Product barcode" autofocus >
                    <?php if (!empty($errors['barcode'])) :?>
                    <small class="text-danger"><?=$errors['barcode']?></small>
                    <?php endif;?>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Qty</span>
                    <input  name="qty" type="number" class="form-control <?= !empty($errors['qty']) ?'border-danger':''?>" value="1" step="0.25"placeholder="Quantity" aria-label="Quantity">
                    <span class="input-group-text">Amount</span>
                    <input  name="amount" type="number" class="form-control <?= !empty($errors['amount']) ?'border-danger':''?>" value="0.00" step="1" placeholder="Amount" aria-label="price">
                </div>
                <?php if (!empty($errors['qty'])) :?>
                    <small class="text-danger"><?=$errors['qty']?></small>
                    <?php endif;?>
                    <?php if (!empty($errors['amount'])) :?>
                    <small class="text-danger"><?=$errors['amount']?></small>
                    <?php endif;?>
                    <br>
                <div class=" mb-3">
                    <label class="formFile" for="formFile">Product image</label>
                    <input type="file" name="image" class="form-control <?= !empty($errors['image']) ?'border-danger':''?>" id="formFile">
                    <?php if (!empty($errors['image'])) :?>
                    <small class="text-danger"><?=$errors['image']?></small>
                    <?php endif;?>
                    </div>
                <br>
                
                    <button class="btn btn-primary float-end" >Save</button>
                    <a href="index.php?pg=admin&tab=products">
                    <button type="button"class="btn btn-danger">Cancel</button>
                    </a>
        </form>
    </div>
<?php require view_path('partials/footer'); ?>