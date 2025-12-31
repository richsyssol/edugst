<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Course</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="course, edugst">

 
</head>


<?php include'header2.php';?>


<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%;background-image: url('asset/images/courses.jpg');  height: 500px;  background-attachment: fixed;
background-position: top;
background-repeat: no-repeat;
background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold ">COURSE</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px; "></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:14px;"></i><span class="fw-semibold" style="color:#194369;  margin-left: -12px;">COURSE</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>





<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/courses.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px; width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">COURSE</h2>
        </div>
      </div>
      
      <!-- Breadcrumb Section -->
      <div class="col-12 d-flex breadcrumb-section align-items-center justify-content-center">
        <div class="newsletter-input-wrapper">
          <span class="d-flex align-items-center">
            <a href="index.php">
              <i class="fa-solid fa-house  text-white" style="font-size: 16px;"></i>
            </a>
            <i class=" fa-solid fa-angle-right " style="font-size: 14px;"></i>
            <span class="fw-semibold" style="color: #194369;">COURSE</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
   <div class="container my-5">
 
      <div class="owl-carousel owl-theme pt-4">
         <!-- Business Law -->
<?php
            $conn = $pdo->open();

            try{
              $stmt = $conn->prepare("SELECT * FROM tbl_course");
              $cnt=1;
              $stmt->execute();
              foreach($stmt as $row){
              //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                
            ?>
            <div class="item">
                <div class="card course-card  p-3">
                    <div class="course-img-container">
                        <a href="courses_sub_page?slug=<?php echo $row['slug'];?>">
                        <img src="admin/assets/images/course/<?php echo $row['image'];?>" class="" height="200" alt="Business Law">
                        <div class="overlay d-flex flex-column align-items-center course-img-container1">
                        </div>
                        </a>
                    </div>
                    <br>
                    <div class="course-body p-2">
                        <div class="d-flex justify-content-between course-title-price mb-2 gap-2" style="margin-top: -6px;">
                        <h6 class=" fs-5"><?php echo $row['name'];?></h6>
                        <span class="fw-bold" style="color:#194369;">₹<?php echo $row['price'];?></span>
                    </div>
                    <div class="blog-card-footer text-start  mb-2" >
                    <span  class="text-black"><i class="fa-solid fa-calendar-days  text-warning " style="font-size: 14px; width:23px!important;"></i> <?php echo $row['duration'];?></span>
                    <span  class="text-black"><i class="fa-solid fa-user text-warning " style="font-size: 14px; width:23px!important;"></i> <?php echo $row['teacher'];?></span>
                    <span  class="text-black"><i class="fa-duotone fa-solid fa-graduation-cap text-warning" style="font-size: 14px; width:23px!important;"></i>Beginner</span>
                </div>
                  <div class="underline-container">
                     <div class="underline"></div>
                  </div>
                  <small class="card-text text-muted py-3" style="text-align: justify;"><?php echo mb_strimwidth($row['about'], 0, 140, "..."); ?></small>
                  <a href="courses_sub_page?slug=<?php echo $row['slug'];?>" class="btn btn-outline py-2 w-50 text-white my-1" style="background-color:#194369; border-radius: 0;" >Learn More</a>
                  <!--<a href="https://graphy.com/" class="btn btn-danger apply-btn mhh1">Learn More</a>-->
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
      </div>
   </div>
</section>
<br>
<br>
<br>








<?php include 'newsadd.php';?>




<script>
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
</script>


<?php include 'footer2.php';?>