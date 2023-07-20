<div class="container-fluid">
<div class="float-end">
            <Button class="btn btn-primary"><a href="index.php?pg=newuser" style="color : white;"><i class = "fa fa-plus"></i> Add User</a></Button>
        </div>
<table class="table table-striped table-hover">

  <thead>
    <tr>
      <th scope="col">Sn No</th>
      <th scope="col">Username</th>
      <th scope="col">User Id</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $query = "SELECT * FROM users where role = 'user'";
    $result = mysqli_query($conn, $query);
    if($result && mysqli_num_rows($result) > 0){
      $counter = 0;
        while($row = mysqli_fetch_assoc($result)){
          $counter ++;
          echo '
          <tr>
            <td>'.$counter.'</td>
            <td>'.$row['username'].'</d>
            <td>'.$row['user_id'].'</td>
            <td>'.$row['password'].'</td>
            
          </tr>';
        }
    }
    
    
    ?>
  </tbody>
</table>
</div>

