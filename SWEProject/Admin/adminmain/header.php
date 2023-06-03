

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

 <!--CSS -->
 <link rel="stylesheet" href="../css/adminstyle.css">

</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top p-0 shadow"
  style="background-color: #225470;">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" 
  href="controlpanel.php"> Control Panel <small class="text-white"> Adminstration</small></a> 
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link " href="controlpanel.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="courses.php">
        <i class="fas fa-laptop"></i>
        Courses
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="lessons.php">
        <i class="fas fa-book"></i>
        Education Session
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="students.php">
        <i class="fas fa-users"></i>
        Clients
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="feedback.php">
        <i class="fas fa-pen-alt"></i>
        Feedback
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="adminChangePass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>