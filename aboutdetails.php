<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | About Details</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="about-details, edugst">

 
</head>
<?php include'header2.php';?>

<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/aboutdetails.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Our Teacher</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">Our Teacher</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>



 <?php
                $conn = $pdo->open();
                $id = $_GET['id'];
                try{
                  $stmt = $conn->prepare("SELECT * FROM our_team WHERE id='$id'");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                    $image = (!empty($row['image'])) ? 'admin/assets/images/team/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>


<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/aboutdetails.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px; width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">OUR TEACHER</h2>
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
            <span class="fw-semibold" style="color: #194369;">ABOUT</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>




<section>
    <div class="container py-5">
        <div class="row align-items-center justify-content-center"> <!-- Added justify-content-center for horizontal centering -->
            <div class="col-lg-5 mb-4 ">
                <img src="<?php echo $image;?>" class="profile-img shadow" alt="Profile Image">
            </div>
            <div class="col-lg-6 "> <!-- Added text-center for this column -->
                <h2 class="mb-0 "><?php echo $row['name'];?></h2>
                <p class="text-muted"><?php echo $row['designation'];?></p>
                <div class="bg-warning mb-3" style="width:50px;height:3px !important"></div>
                <p style="    text-align: justify;"> <?php echo $row['description'];?></p>

              <!--  <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="skill">English</span>
                        <span>90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="skill">Business Management</span>
                        <span>60%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%;"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="skill">Hardware & Software</span>
                        <span>70%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="skill">SPA</span>
                        <span>80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%;"></div>
                    </div>
                </div>
                
                <div class="row ">
                    <div class="col-auto social-icons ad">
                        <a href="https://www.facebook.com/edugst/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/_edu_gst_/"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/9922159279"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/company/edu-gst/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>




 
<section class="">
    <div class="container ">
        <div class="col-12 col-sm-4 mx-auto">
            <center>
                 <center><img src="asset/images/star.png" alt="Logo" class="mx-auto " style="width: 60px;"></center>
            </center>
            <h1 class="text-center">OUR TEACHER</h1>
            <p class="text-center text-muted fw-semibold">MEET OUR PROFESSIONAL INSTRUCTORS</p>
            <div class="bg-warning mx-auto" style="width:50px;height:3px !important"></div>
        </div>
        <br>

        <!-- Owl Carousel Starts Here -->
        <div class="owl-carousel owl-theme">
  <?php
                $conn = $pdo->open();

                try{
                  $stmt = $conn->prepare("SELECT * FROM our_team");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                    $image = (!empty($row['image'])) ? 'admin/assets/images/team/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
            <div class="teacher-card">
                <div class="teacher-img">
                <a href="aboutdetails?id=<?php echo $row['id'];?>">
                    <img src="<?php echo $image;?>" alt="<?php echo $row['name'];?>">
                   
                    <div class="overlay">
                        <!--<div class="social-icons" style="gap: 10px;">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>-->
                    </div>
                     </a>
                </div><br>
             <p class="mb-0 fw-semibold"><?php echo $row['name'];?></p>
        <p class="text-muted"><?php echo $row['designation'];?></p>
            </div>
            <!-- Image 2 -->
         <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>   
        </div>
        <!-- Owl Carousel Ends Here -->

    </div>
</section>
<br>
<br>
<br>

<?php include 'newsadd.php';?>


 <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?> 









<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,       /* Show Next and Previous buttons */
            dots: false,      /* Show Dots (pagination) */
            autoplay: true,  /* Auto play the slides */
            autoplayTimeout: 3000, /* Set the autoplay interval */
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>
    




<?php include 'footer2.php';?>