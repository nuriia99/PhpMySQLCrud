
<?php include("db.php"); ?>
<?php include("./includes/header.php") ?>

<?php if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  } else $row = mysqli_fetch_array($result);
 } 
 
 if(isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];
  $query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task updated succesfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
 } 
 
 ?>

<div class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-body">
          <form action="edit_task.php?id=<?= $_GET['id']; ?>"  method="POST">
            <div class="mb-3">
              <input type="text" name="title" class="form-control" placeholder="<?= $row['title'] ?>" autofocus>
            </div>
            <div class="mb-3">
            <textarea name="description" class="form-control" cols="30" rows="5"><?= $row['description'] ?></textarea>
            </div>
            <button  class="btn btn-success" name="update">
              Update
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include("./includes/footer.php") ?>