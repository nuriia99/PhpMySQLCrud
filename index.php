
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
        <div class="card card-body">
          <form action="save_task.php"  method="POST">
            <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
            </div>
            <div class="form-group">
              <textarea name="description" id="description" rows="2" placegholder="Task Description"></textarea>
            </div>
            <input type="submit" name="save_task"  class="btn btn-success">
          </form>
        </div>
      </div>
      <div class="col-md-8">

      </div>
    </div>
  </div>
</div>
<?php include("./includes/footer.php") ?>
  