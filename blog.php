
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Blog</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="blog, edugst">

 
</head>



<?php include'header2.php';?>


<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/blogg.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Blog</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">Blog</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>



<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/blogg.jpg');
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
            <span class="fw-semibold" style="color: #194369;">BLOG</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container mt-5">
  <div class="row">
    <!-- Left Side Content: Blog Section -->
    <div class="col-lg-8">
      <div class="blog">
        <?php
        $conn = $pdo->open();
        try {
          $stmt = $conn->prepare("SELECT * FROM blogs ORDER BY created_on DESC");
          $stmt->execute();
          foreach ($stmt as $row) {
            $image = (!empty($row['blog_img'])) ? 'admin/assets/images/blog/'.$row['blog_img'] : 'assets/images/users/profile.jpg';
        ?>
        <div class="blog-card mb-4">
          <div class="blog-card-image">
            <a href="blog_details?id=<?php echo $row['blog_id'];?>">
              <img src="<?php echo $image;?>" alt="<?php echo $row['blog_name'];?>" class="img-fluid">
            </a>
          </div>
          <div class="blog-card-content p-3" style="background-color:#f8f8f8;">
            <h3><?php echo $row['blog_name'];?></h3>
            <div class="blog1-card-footer text-start mb-2">
              <span class="text-black">
                <i class="fa-solid fa-clock text-warning" style="font-size: 14px;"></i> <?php echo $row['created_on'];?>
              </span>
             
            </div>
             <p><?php echo $row['subtitle'];?></p>
          </div>
        </div>
        <?php 
          }
        } catch(PDOException $e) {
          echo $e->getMessage();
        }
        $pdo->close();
        ?>
      </div>
    </div>

    <!-- Right Side: Search and Recent Posts -->
    <div class="col-lg-4">
      <!-- Search Section -->
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
      <div class="mb-4">
        <div class="section-title">
          <h6 class="fw-semibold">RECENT POSTS</h6>
        </div>
        <div class="recent-posts border p-3">
          <?php
          $conn = $pdo->open();
          try {
            $stmt = $conn->prepare("SELECT * FROM blogs ORDER BY created_on DESC LIMIT 5");
            $stmt->execute();
            foreach ($stmt as $row) {
              $image = (!empty($row['blog_img'])) ? 'admin/assets/images/blog/'.$row['blog_img'] : 'assets/images/users/profile.jpg';
          ?>
          <div class="post-item border-bottom mb-3">
            <a href="blog_details?id=<?php echo $row['blog_id'];?>" class="text-decoration-none text-dark">
              <p><?php echo $row['blog_name'];?></p>
            </a>
            <div class="blog1-card-footer text-start">
              <span class="text-black" style="font-size: 14px;">
                <i class="fa-solid fa-calendar-days text-warning" style="font-size: 14px;"></i> <?php echo $row['created_on'];?>
              </span>
            </div>
          </div>
          <?php 
            }
          } catch(PDOException $e) {
            echo $e->getMessage();
          }
          $pdo->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>





<br>
<br>
<br>







<?php include 'newsadd.php';?>











<?php include 'footer2.php';?>