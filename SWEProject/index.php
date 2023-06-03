<!----> 
<?php
include('./dbConnection.php');
include('./mainInclude/header.php')
?>
<!----> 


    <!--Start Video-->
<div class="container-fluid remove-vid-marg">
  <div class= "vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/vidback.mp4" >
    </video>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to BrainBoost</h1>
      <small class="my-content">Unlimited access to 100+ courses,lifetime access, and certificate programs—all included in your subscription</small><br />
      <?php
      if(!isset($_SESSION['is_login'])){
        echo '<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#RegModalCenter">Get Started</a>
        ';
       } else{
        echo '<a href="students/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
       }
      ?>
    
  </div>
  </div>


    <!--End Video-->

    <!-- Start Text Banner -->
    <div class="container-fluid bg-danger txt-banner"> 
        <div class="row bottom-banner">
          <div class="col-sm">
            <h5> <i class="fas fa-laptop mr-3"></i>Online Courses</h5>
          </div>
          <div class="col-sm">
            <h5>
              <i class="fas fa-money-bill-alt mr-3"></i>Save Money</h5>
          </div>
          <div class="col-sm">
            <h5>
            <i class="fas fa-check-circle mr-3"></i>Flexible Learning</h5>
          </div>
          <div class="col-sm">
            <h5>
            <i class="fas fa-star mr-3"></i>Easy Access</h5>
          </div>
        </div>
    </div> 
    <!-- End Text Banner -->
    <!-- Start  Popular Course --> 
    <div class="container mt-5">
    <h1 cLass="text-center">See what you can learn with BrainBoost</h1> 
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 1st Card Deck -->
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
          while($row = $result->fetch_assoc()){
            $course_id = $row['course_id'];
            echo '
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style=" padding:0px;">
              <div class="card">
                <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Data Analytics" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
                  <div class="card-text" style="overflow: auto; max-height: 200px; /* Adjust the maximum height as needed */">
                  <p class="card-text">'.$row['course_desc'].'</p>
                             </div>

                </div>
                <div class="card-footer">
                  <p class="card-text d-inline">Price: <small><del>&euro;  '.$row['course_original_price'].'</del></small> 
                  <span class="font-weight-bolder text-danger">  '.$row['course_price'].'<span></p> 
                  <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                  </div>
              </div>
            </a>  ';
          }
        }
        ?>   
      </div>  <!-- End Most Popular Course 1st Card Deck -->   
      <div class="card-deck mt-4"> <!-- Start Most Popular Course 2nd Card Deck -->
        <?php
          $sql = "SELECT * FROM course LIMIT 3,3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
                <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style=" padding:0px;">
                  <div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Data Analytics" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <div class="card-text" style="overflow: auto; max-height: 200px; /* Adjust the maximum height as needed */">
                  <p class="card-text">'.$row['course_desc'].'</p>
                             </div>
                                        
                                   </div>
                    <div class="card-footer">
                      <p class="card-text d-inline">Price: <small><del>&euro;  '.$row['course_original_price'].'</del></small>
                       <span class="font-weight-bolder text-danger">  '.$row['course_price'].'<span></p>
                       <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                    </div>
                  </div>
                </a>  ';
            }
          }
        ?>
      </div>   <!-- End Most Popular Course 2nd Card Deck --> 
      <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php ">View All Course</a> 
      </div>
    </div>  <!-- End Most Popular Course -->

 <!--Start Contact Us-->
 <?php
include('./contactUs.php')

?>
    <!-- End Contact Us -->


<!--feedback-->
<div class="container-fluid mt-5" style="background-color: #4B7289 " id="Feedback">
<h1 class="text-center testyheanding p-4">How learners like you are achieving their goals</h1>
<div class="row">
  <div class="col-md-12">
    <div id="testimonial-slider" class="owl-carousel">
<?php 
$sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
$result= $conn->query($sql);
if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    $s_img = $row['stu_img'];
    $n_img = str_replace('../','',$s_img)
?>
<div class="testimonial">
  <p class="description">
  <?php echo $row['f_content'];?>  
  </p>
  <div class="pic">
    <img src="<?php echo $n_img; ?>" alt=""/>
  </div>
  <div class="testimonial-prof">
    <h4><?php echo $row['stu_name']; ?></h4>
    <small><?php echo $row['stu_occ']; ?></small>
  </div>
</div>
<?php }} ?>
</div>
</div>
</div>
</div>
<!--Social Media-->
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
<div class="col-sm">
  <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
</div>
<div class="col-sm">
  <a class="text-white social-hover" href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
</div>
<div class="col-sm">
  <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
</div>
  </div>
</div>
<!--end Social Media-->
<!--Section-->
<div class="container-fluid p-4" style="background-color: azure;">
<div class="container" style="background-color: azure;">
  <div class="row text-center">
    <div class="col-sm">
      <h5>About BrainBoost</h5>
      <p>At BrainBoost, we are passionate about providing high-quality online learning experiences that empower individuals to expand their knowledge and skills. Our platform offers a diverse range of courses, 
      carefully crafted by industry experts and instructors, to cater to learners of all levels</p>

    </div>
    <div class="col-sm">
      <h5>Category</h5>
      <a class="text-dark" href="#">Web Development</a> <br />
      <a class="text-dark" href="#">Data Analysis</a> <br />
      <a class="text-dark" href="#">Web Design</a> <br />
      <a class="text-dark" href="#">Cloud Computing</a> <br />

    </div>
    <div class="col-sm">
      <h5>Contact Us</h5>
      <p>We would love to hear from you! If you have any questions, 
        suggestions, or feedback, please feel free to reach out to our dedicated support team.</p>

    </div>
  </div>

</div>
</div>
<!--Include footer-->
<?php
include('./mainInclude/footer.php')
?>