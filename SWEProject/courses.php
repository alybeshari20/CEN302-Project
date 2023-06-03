<?php
include('./dbConnection.php');

include('./mainInclude/header.php')
?>
        <div class="container-fluid bg-dark">
            <div class="row">
                <img src="./image/imgcourses/Library.jpg" alt="Courses" 
                style="height: 500px; width:100%; object-fit:cover; box-shadow: 10px " />
            </div>
        </div>


    <!-- Start  Popular Course --> 
    <div class="container mt-5">
    <h1 cLass="text-center">A NEW WAY TO LEARN</h1> 
    <!-- Start Course 1st Card Deck --> 
    <div class="row mt-4"> <!-- Start All Course Row -->
      <?php
          $sql = "SELECT * FROM course";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo ' 
                <div class="col-sm-4 mb-4">
                  <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style=" padding:0px;"><div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Data Analytics" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      
                    </div>
                    <div class="card-footer">
                       <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                    </div>
                  </div> </a>
                </div>
              ';
            }
          }
        ?> 
        </div><!-- End All Course Row -->   
 </div>
        
 <!--Include footer-->
<?php
include('./mainInclude/footer.php')
?>