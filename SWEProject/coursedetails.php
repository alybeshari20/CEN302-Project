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
        <div class="container mt-5"> <!-- Start All Course -->
      <?php
          if(isset($_GET['course_id'])){
           $course_id = $_GET['course_id'];
           $_SESSION['course_id'] = $course_id;
           $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              echo ' 
                <div class="row">
                <div class="col-md-4">
                  <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Course Name: '.$row['course_name'].'</h5>
                    <p class="card-text"> Description: '.$row['course_desc'].'</p>
                    <p class="card-text"> Duration: '.$row['course_duration'].'</p>
                    <form action="watchcourse.php" method="post">
                  
                      <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" 
                      name="watch ">Watch Now</button>
                    </form>
                  </div>
                </div>
              ';
            }
          }
         }
        ?> 
<div class="container">
          <div class="row">
          <?php $sql = "SELECT * FROM lesson";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
          echo '
           <table class="table table-bordered table-hover">
             <thead>
               <tr>
                 <th scope="col">Lesson No.</th>
                 <th scope="col">Lesson Name</th>
               </tr>
             </thead>
             <tbody>';
             $num = 0;
             while($row = $result->fetch_assoc()){
              if($row['course_id'] == $course_id) {
               $num++;
              echo ' <tr>
               <th scope="row">'.$num.'</th>
               <td>'. $row["lesson_name"].'</td></tr>';
              }
             }
             echo '</tbody>
           </table>';
            } ?>         
       </div>
      </div>  
     <?

<!--Include footer-->
<?php
include('./mainInclude/footer.php')
?>