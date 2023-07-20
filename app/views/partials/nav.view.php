<?php require view_path("partials/header");
 

?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><?php $time = date("H"); if ( $time >= 14) {
      echo ("Good Evening " . $_SESSION['username']); 
    }elseif ( $time >= 12 && $time <14) {
      echo ("Good Afternoon " . $_SESSION['username']);
    }else{
      echo("Good Morning " . $_SESSION['username']);
    }  ?></a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div><a href="index.php?pg=logout"><i class="fa fa-sign-out" aria-hidden="true"> Log Out</i></a></div>
  </div>
</nav>