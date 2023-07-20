<div class="container-fluid">
<div class="float-end">
            <Button class="btn btn-primary"><a href="index.php?pg=newadmin" style="color : white;"><i class = "fa fa-plus"></i> Add Admin</a></Button>
        </div>
<table class="table table-striped table-hover">

  <thead>
    <tr>
      <th scope="col">Sn No</th>
      <th scope="col">Admin Name</th>
      <th scope="col">Admin Id</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
    
  </thead>
  <tbody>
    
    <?php $query = "SELECT * FROM users where role = 'admin'";
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
            <td><Button class="btn btn-success" ><a style="color: white" href="index.php?pg=admin-edit&adminId='.$row['user_id'].'&adminName='.$row['username'].'">Edit</a></Button>
            <Button class="btn btn-danger" ><a style="color: white" href="index.php?pg=admin-delete&adminId='.$row['user_id'].'&adminName='.$row['username'].'">Delete</a></Button></td>
            
          </tr>';
        }
    }
    
    
    ?>
  </tbody>
</table>
</div>

