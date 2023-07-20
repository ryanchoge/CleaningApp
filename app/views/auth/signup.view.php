<?php require view_path ('partials/header')?>
<div class = "row p-5">
    
    <div class = "col-4 m-auto p-5 shadow-lg" style = "background-image: linear-gradient(to right,#FFD0D0, #C1ECE4);">
    <center><h3 style = "color : #1B6B93">Sign Up</h3></center>
    <form method = "post" action = "" autocomplete="off">
        <div class="mb-3">
            <label for="userId" class="form-label">User Id</label>
            <input type="number" name = "userId"
            class="form-control" id="exampleInputEmail1" autofocus autocomplete = "false">
            
        </div>
        <div class="mb-3">
            <label for="userId" class="form-label">User Name</label>
            <input type="text" name = "username"
            class="form-control" id="exampleInputEmail1" autofocus autocomplete = "false">
            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name = "password"class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" name= "confirmpassword"class="form-control" id="exampleInputPassword1">
        </div>
        <div class="d-flex p-3">
                <input type="submit" value="Sign Up" name= "signUp" class="signUp"></input>
            </div>
        <div class = "pt-3">
        Have an Account?<a style = "color : blue;"href="index.php?pg=signin"> Sign In</a>
        </div>
        
        
        </form>
    </div>
</div>