
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Blog_details</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="blog_details, edugst">

 
</head>


<?php include'header2.php';?>





<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/blogdetails.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Blog </h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px; "></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">Blog Details</span></span>

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
          $stmt = $conn->prepare("SELECT * FROM blogs WHERE blog_id='$id'");
          $cnt=1;
          $stmt->execute();
          foreach($stmt as $row){
            $image = (!empty($row['blog_img'])) ? 'admin/assets/images/blog/'.$row['blog_img'] : 'assets/images/users/profile.jpg';
            
    ?>

<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/blogdetails.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px; width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">BLOG</h2>
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
            <span class="fw-semibold" style="color: #194369;">BLOG DETAIL'S</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>



<section>
    <div class="container mt-5">
        <div class="row">
            <!-- Left Section -->
            <div class="col-lg-8">
                <!-- Featured Image -->
                <div class="post-header mb-4">
                    <img src="<?php echo $image;?>" style="height:428px; width:1170px;" alt="<?php echo $row['blog_name'];?>" class="img-fluid  rounded">
                </div>

                <!-- Post Title and Meta -->
                <div class="post-title">
                    <h5 class="mt-5 fw-semibold "><?php echo $row['blog_name'];?></h5>
                              <div class="blog1-card-footer text-start  mb-4">
                    <span class="text-black" style="font-size: 14px; "><i class="fa-solid fa-clock text-warning " style="font-size: 14px; width:23px!important;"></i> <?php echo $row['created_on'];?></span>
                    <!--<span  class="text-black" style="font-size: 14px; "><i class="fa-solid fa-comments text-warning " style="font-size: 14px; width:23px!important;"></i> 0</span>-->
                   <!-- <span  class="text-black" style="font-size: 14px; "><i class="fa-solid fa-eye text-warning" style="font-size: 14px; width:23px!important;"></i> 3732</span>-->
                </div>
                  
                </div>

                <!-- Post Content -->
                <div class="post-content ">
                   <?php echo $row['blog_desc'];?>

                    <!-- Highlighted Quote -->
<!--                  <div class="highlight-text py-5 p-4 bg-light shadow fw-semibold border-start">-->
<!--    As teachers, it’s necessary to be able to teach and remain engaging. It puts a greater level of-->
<!--    responsibility on creating lesson plans that truly work.-->
<!--</div>-->

                    <!-- Additional Content -->
                   
                        <hr>
                        <div class="row mb-5 "> <!-- Added justify-content-center for centering social icons -->
                    <div class="col-auto social-icons1 ad">
                        <a href="https://www.facebook.com/edugst/"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/_edu_gst_/"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/9922159279"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/company/edu-gst/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                </div>
            </div>

            <!-- Right Section -->
           <div class="col-lg-4">
   
  <div class="mb-4">
    <div class="section-title">
    <h6 class="fw-semibold">SEARCH IN SITE</h6>
    </div>
    <div class="search-box p-3 border">
      <form action="search" method="GET" class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Enter your keyword" aria-label="Search">
        <button class="btn btn-warning" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- Recent Posts Section -->
  <div class="">
    <div class="section-title">
        <h6 class="fw-semibold">RECENT POSTS</h6>
    </div>
    <div class="recent-posts border p-3">
          <?php
        $conn = $pdo->open();

        try{
          $stmt = $conn->prepare("SELECT * FROM blogs Order By created_on DESC LIMIT 5");
          $cnt=1;
          $stmt->execute();
          foreach($stmt as $row){
            $image = (!empty($row['blog_img'])) ? 'admin/assets/images/blog/'.$row['blog_img'] : 'assets/images/users/profile.jpg';
            
    ?>
      <div class="post-item border-bottom">
        <a href="blog_details?id=<?php echo $row['blog_id'];?>" class="text-decoration-none text-dark">
        <p > <?php echo $row['blog_name'];?></p>
        </a>
                        <div class="blog1-card-footer text-start  mb-2">
                    <span class="text-black" style="font-size: 14px;"><i class="fa-solid fa-calendar-days text-warning " style="font-size: 14px; width:23px!important;"></i>  <?php echo $row['created_on'];?></span>
                    <!--<span  class="text-black" style="font-size: 14px;"><i class="fa-solid fa-comments text-warning " style="font-size: 14px; width:23px!important;"></i> 0</span>-->
                   <!-- <span  class="text-black" style="font-size: 14px;"><i class="fa-solid fa-eye text-warning" style="font-size: 14px; width:23px!important;"></i> 3732</span>-->
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

<?php include 'footer2.php';?>