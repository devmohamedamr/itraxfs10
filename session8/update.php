<?php



if(isset($_GET['id'])){

    $id = $_GET['id'];


    $connection =  mysqli_connect("localhost","root","","lmsfs10");
    $query = mysqli_query($connection,"SELECT * FROM `user` WHERE `id` = $id");

    $row =  mysqli_fetch_assoc($query);
}


if(isset($_POST['name'])){

    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    // print_r($_POST);die;
    $connection =  mysqli_connect("localhost","root","","lmsfs10");

    $query = mysqli_query($connection,"UPDATE `user` SET `name` = '$name' , `email` = '$email' , `password` = '$password' WHERE `id` = $id");
    // echo mysqli_affected_rows($connection);die;
    if(mysqli_affected_rows($connection) >= 0){
        header("location: index.php");
    }else{
        echo "errror";
    }

}

?>

<?php include "header.php"; ?>         

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">



             <form action="update.php" method="post" class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" value="<?=  $row['name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="text" name="email" value="<?=  $row['email']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="text" name="password" value="<?=  $row['password']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <input type="hidden" name="id" value="<?=  $id; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">

                  <!-- <div class="card-footer"> -->
                  <button type="submit" class="btn btn-primary">update</button>
                <!-- </div> -->
                </form>
                <!-- /.card-body -->

              
              



      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


<?php include "footer.php"; ?>         
