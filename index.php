
<?php include("db.php"); ?>
<?php include("./includes/header.php") ?>

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a href="index.php" class="navbar-brand">PHP MYSQL</a>
  </div>
</nav>
<div>
  <div class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <?php if(isset($_SESSION['message'])){?>
          <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php session_unset(); }?>
        <div class="card card-body">
        <form action="save_task.php"  method="POST">
            <div class="mb-3">
              <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
            </div>
            <div class="mb-3">
            <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <input type="submit" name="save_task"  class="btn btn-success">
          </form>
        </div>
      </div>
      <div class="col-md-8">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Title</th></th>
              <th>Description</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $query = "SELECT * FROM task";
              $result_tasks = mysqli_query($conn, $query);

              while($row = mysqli_fetch_array($result_tasks)) { ?>
                <tr>
                  <td>
                    <?= $row['title'] ?>
                  </td>
                  <td>
                    <?= $row['description'] ?>
                  </td>
                  <td>
                    <?= $row['created_at'] ?>
                  </td>
                  <td>
                    <a class='btn btn-secondary' href="edit_task.php?id=<?= $row['id'] ?>"><i class='fas fa-marker'></i></a>
                    <a class='btn btn-danger' href="delete_task.php?id=<?= $row['id'] ?>"><i class='far fa-trash-alt'></i></a>
                  </td>
                </tr>
              <?php } ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include("./includes/footer.php") ?>
  