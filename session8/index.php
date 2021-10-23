<?php
session_start();
$connection =  mysqli_connect("localhost","root","","lmsfs10");
$query = mysqli_query($connection,"SELECT * FROM `user`");

while($row =  mysqli_fetch_assoc($query)){
    $data[] = $row; 
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


        <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>name</th>
                      <th>email</th>
                      <th>update</th>
                      <th >delete</th>
                    </tr>
                  </thead>
                  <tbody>
              <?php foreach($data as $user): ?>
                    <tr>
                      <td><?= $user['id']; ?></td>
                      <td><?= $user['name']; ?></td>
                      <td>
                      <?= $user['email']; ?>
                      </td>
                      <td><a href="update.php?id=<?= $user['id']; ?>">update</a></td>
                      <td><a href="delete.php?id=<?= $user['id']; ?>">delete</a></td>
                    </tr>
                <?php endforeach; ?>
                  </tbody>
                </table>



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
