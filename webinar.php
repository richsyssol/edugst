<?php include'header2.php';?>



<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/webinar.webp');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Webinar</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:15px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">Webinar</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>




<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/webinar.webp');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px; width: 97.08%; z-index: 2;" id="blue">
    <div class="row " style="width: 444px;">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1">
          <h2 class="text-uppercase fw-semibold text-center text-white">WEBINAR</h2>
        </div>
      </div>
      
      <!-- Breadcrumb Section -->
      <div class="col-12 d-flex breadcrumb-section align-items-center justify-content-center">
        <div class="newsletter-input-wrapper">
          <span class="d-flex align-items-center">
            <a href="index.php">
              <i class="fa-solid fa-house  text-white" style="font-size: 15px;"></i>
            </a>
            <i class=" fa-solid fa-angle-right " style="font-size: 14px;"></i>
            <span class="fw-semibold" style="color: #194369;">WEBINAR</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="py-5 ">
        <div class="container">
            <div class="row">
                <!-- Webinar Card -->
                   <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_webinar WHERE status='Active'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/webinar/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                        ?>
                <div class="col-md-4 webinar-card">
                    <div class="card h-100">
                        <img src="<?php echo $image;?>" alt="Webinar Image">
                        <div class="card-body shadow">
                            <p class="card-title "><?php echo $row['name'];?></h4> <!-- Replace with your course name -->
                            <div class="card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="fw-bold heading "><?php echo $row['date'];?></span>
                            </div>
                            <div class="card-time">
                                <i class="fas fa-clock"></i>
                                <span class="fw-bold heading">Zoom Meeting: <?php echo $row['start'];?> - <?php echo $row['end'];?></span>
                            </div>
                            <div class="card-footer heading">Free Webinar</div><br>
                     <button class="register text-white btn  Story2 fw-bold registerBtn" data-bs-toggle="modal" data-bs-target="#modal" style="background-color:#194369; border-radius: 0;">Register Now</button>
                            
                                     <a href="knowmore?id=<?php echo $row['id'];?>" class="btn btn-danger fw-bold"   style=" border-radius: 0;" >Know More</a>
                                       <!--<a href="https://graphy.com/" class="btn Story2 text-white fw-bold">Graphy</a>-->
                        </div>
                    </div>
                </div>
                <div id="modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title heading1">Register Form</h4>
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form method="post" action="registeration.php">
                        <input type="hidden" name="w_id" value="<?php echo $row['id'];?>">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact Number:</label>
                            <input type="tel" id="contact" name="contact" class="form-control" min="10" max="10" pattern="[789][0-9]{9}" required>
                        </div>
                        <div class="form-group">
                            <label for="qualification">Qualification:</label>
                            <input type="text" id="qualification" name="qualification" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea id="address" name="address" class="form-control" required></textarea>
                        </div>
                    <br>
                        <button type="submit" name="submit" value="submit" class="btn btn-danger ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php 
      }
          }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>   
                <!-- Webinar Card -->
              
            </div>
        </div>
    </section>

    <!-- The Modal -->
    

<?php include 'newsadd.php';?>




    
    <script>
        $(document).ready(function(){
            $(".registerBtn").click(function(){
                $("#modal").modal('show');
            });

            $("#registrationForm").submit(function(event) {
                event.preventDefault();
                const formData = new FormData(this);

                // Process the form data here
                console.log('Form submitted');

                // Close the modal
                $("#modal").modal('hide');
            });
        });
    </script>








<?php include 'footer2.php';?>