<?php
if(!isset($_SESSION)){
  session_start();
}
include('./adminmain/header.php');
include('../dbConnection.php');
if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
?>
<div class="col-sm-9 mt-5">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Courses</div>
        <div class="card-body">
          <h4 class="card-title">5</h4>
          <a class="btn btn-light text-dark" href="courses.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Clients</div>
        <div class="card-body">
          <h4 class="card-title">19</h4>
          <a class="btn btn-light text-dark" href="students.php">View</a>
        </div>
      </div>
    </div>
    
<?php
include('./adminmain/footer.php');
?>