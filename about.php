<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | About Us</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="about-us, edugst">

</head>

<?php include'header2.php';?>





<div class="d-flex flew-row position-relative d-none d-sm-block alignment center" style="width: 100%; background-image: url('asset/images/bg-page-title.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%; height: 80px;  z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >About</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%; height: 58px; margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase " style="color:#194369; font-size:18px;     margin-left: -12px;">About</span></span>
    </div>
</div>
</div>









<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/bg-page-title.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px;    width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2" >
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">About</h2>
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
            <span class="fw-semibold" style="color: #194369;">About</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>









<section class="mb-5 py-2">
    <div class="container about-section">
    <!-- Title and Subtitle -->
    <div class="col-12 col-sm-4 mx-auto mb-5">
         <center><img src="asset/images/star.png" alt="Logo" class="mx-auto " style="width: 60px;"></center>
         <h2 class=" text-center ">ABOUT EDU-GST</h2>
         <p class="text-center text-muted fw-semibold">EDU-GST PROFILE & HISTORY</p>
         <div class="bg-warning mx-auto" style="width:50px;height:3px !important"></div>
      </div>

    <div class="row">
      <!-- Left Section: 4 Paragraphs -->
      <div class="col-md-4">
           <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_other_data WHERE id='6'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
<div class="about-block" style="text-align: right; direction: rtl;">
    <p class="about fw-semibold mb-0">
        <i class="fa-solid fa-eject" style="color: #194369;"></i><?php echo $row['name'];?>
    </p>
    <p style="text-align: justify;"><?php echo $row['content'];?></p>
</div>
 <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?> 

  <br>
   <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_other_data WHERE id='2'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
  <div class="about-block" style="text-align: right; direction: rtl;">
    <p class="about mb-0 fw-semibold   me-2" ><i class="fa-solid fa-thumbs-up" style="color: #194369;"></i><?php echo $row['name'];?> </p>
    <p style="text-align: justify;"><?php echo $row['content'];?></p>
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


      <!-- Middle Section: Image -->
      <div class="col-md-4 text-center">
        <img src="asset/images/agirl.jpg" alt="Academia Image" class="img-fluid about-image">
      </div>

      <!-- Right Section: 4 Paragraphs -->
      <div class="col-md-4 ">
            <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_other_data WHERE id='4'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
        <div class="about-block">
          <p class="about fw-semibold   mb-0"><i class="fa-solid fa-plane"  style="color: #194369;"></i><?php echo $row['name'];?></p>
          <p  style="text-align: justify;"><?php echo $row['content'];?></p>
        </div>
         <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?> 
    <br>
    <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_other_data WHERE id='5'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
  <div class="about-block">
    <p class="about fw-semibold mb-0">
        <i class="fa-solid fa-graduation-cap" style="color: #194369;"></i><?php echo $row['name'];?>
    </p>
   <?php echo $row['content'];?>
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
  </div>
</section>



<section class=" mt-5">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 col-md-12 custom-image-container ">
                <div class="custom-left-image" style="background-image: url('asset/images/vm.avif'); background-size: cover; height: 100%;"></div>
            </div>
           <div class="col-lg-6 col-md-12 custom-values-section">
                 <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_other_data WHERE id='1'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
    <div class="custom-values-card d-flex align-items-center  vision w-100">
        <div class="custom-icon">
            <img src="asset/images/trophy.png" alt="Strategy Icon">
        </div>
        <div class="custom-content-text ms-3 text-center text-md-start"> <!-- Added text-center for mobile view -->
            <h6 class="mhh1 text-uppercase fw-semibold   inter"><?php echo $row['name'];?></h6>
            <p class="fs-6"><?php echo $row['content'];?></p>
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
                   <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM  tbl_other_data WHERE id='2'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
    <div class="custom-values-card d-flex align-items-center vision">
        <div class="custom-icon">
            <img src="asset/images/trophy.png" alt="Strategy Icon">
        </div>
        <div class="custom-content-text ms-3 text-center text-md-start"> <!-- Added text-center for mobile view -->
            <h6 class="mhh1 text-uppercase fw-semibold inter"><?php echo $row['name'];?></h6>
            <p class="fs-6"><?php echo $row['content'];?></p>
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
            </div>
        </section>


 
<section>
    <div class="container ">
        <div class="col-12 col-sm-4 mx-auto">
              <center><img src="asset/images/star.png" alt="Logo" class="mx-auto " style="width: 60px;"></center>
            <h2 class="text-center">OUR TEACHER</h2>
            <p class="text-center text-muted fw-semibold">MEET OUR PROFESSIONAL INSTRUCTORS</p>
            <div class="bg-warning mx-auto" style="width:50px;height:3px !important"></div>
        </div>
        <br>

        <!-- Owl Carousel Starts Here -->
        <div class="owl-carousel owl-theme">
            <!-- Image 1 -->
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
   
<section class=" " style="background-image: url('asset/images/cp.png'); height: 515px; background-size: cover;">
    <div class="container text-center d-flex justify-content-center align-items-center" style="height: 100%;">
        <!-- Owl Carousel for Testimonials -->
        <div class="owl-carousel scroll owl-theme">
            <!-- First slide: Priyanka Shewale -->
             <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM parent_testi");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/parent/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                        ?>
            <div class="item">
                <p class="mhh1 text-center text-white" style="text-align: justify;">
                   <?php echo $row['description'];?>
                </p>
                <p class="text-white">
                    <span class="highlight fw-bold"><?php echo $row['name'];?></span> - <?php echo $row['about'];?>
                </p>
                <center>
                    <img src="<?php echo $image;?>" class="rounded-circle img-fluid" height="100" style="width: 8%;" alt="Priyanka Shewale">
                </center>
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

    <!-- Background section after the content -->
    <div class="background-section mt-4">
        <!-- Background content here -->
    </div>

    <script>
        $(document).ready(function(){
            $(".scroll ").owlCarousel({
                items: 1,             // Show only one item at a time
                loop: true,           // Enable infinite looping
                margin: 10,           // Space between items
                nav: true,            // Enable navigation arrows
                dots: true,           // Enable dot indicators
                autoplay: true,       // Enable auto-slide
                autoplayTimeout: 3000, // Set slide interval to 3 seconds
                autoplayHoverPause: true, // Pause when hovering
            });
        });
    </script>
</section>
<section>
    <div class="container my-5 py-3">
    <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
             <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM tbl_logo Order By creation_on DESC");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                                $image = (!empty($row['image'])) ? 'admin/assets/images/logo/'.$row['image'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
            <div class="item d-flex justify-content-center align-items-center">
                <img src="<?php echo $image;?>" class=" companyicon" alt="">
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
    
    
<script>
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: { items: 1 },  // 1 image per slide on mobile
            600: { items: 2 },  // 2 images per slide on tablets
            1000: { items: 4 }  // 4 images per slide on larger screens
        }
    });
});

</script>




<?php include 'footer2.php';?>