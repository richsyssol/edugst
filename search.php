
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Search</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="blog_details, edugst">
</head>
<?php include'header2.php';?>
<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('https://www.cambridge.org/gb/education/blog/wp-content/uploads/2023/11/GettyImages-1383890709.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Blog </h2>
    </div>
</div>
<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px; "></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">Blog Search</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>



<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/bg-page-title.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 w-100" style="height: 100px; z-index: 2;" id="blue">
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
             <p><strong>Search for:</strong> <?php echo $_GET['search'];?></p>
            <div class="col-lg-8">
                  <?php 
	include'includes/config.php';
					
    $search = $_REQUEST['search'];
								
		$sql="SELECT * FROM blogs WHERE blog_name='$search' OR blog_desc='$search'";
	$result=mysqli_query($conn,$sql);
							
	if(mysqli_num_rows($result)>0)
	{
		if($result == true)
		{
			while($row=mysqli_fetch_array($result))
			{
			      $image = (!empty($row['blog_img'])) ? 'admin/assets/images/blog/'.$row['blog_img'] : 'assets/images/users/profile.jpg';
                                                
?>
        
          
        <div class="card card-horizontal mb-3 shadow">
          <div class="row g-0">
            <div class="col-md-4">
               <a href="blog_details?id=<?php echo $row['blog_id'];?>">
                <img src="<?php echo $image;?>" class="img-fluid rounded-start" alt="<?php echo $row['blog_name'];?>">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h4 class="card-title heading1"><?php echo $row['blog_name'];?>:</h4>
                <p class="heading"><?php echo $row['created_on'];?></p>
                <hr>
                  <p><?php echo $row['subtitle'];?></p>
              </div>
            </div>
          </div>
        </div>
      <?php 		
										
					
									}
								}
								else {
									
									echo "<h4 class='mb-5'><center>No Data Available</center></h4>";
								}
									
							}

							?>  
            </div>

            <!-- Right Section -->
           <div class="col-lg-4">
   
  <div class="mb-4">
    <div class="section-title">
    <h6 class="fw-semibold">SEARCH IN SITE</h6>
    </div>
    <div class="search-box p-3 border">
      <form action="search" method="GET" class="d-flex">
        <input class="form-control me-2" type="search" name="search" value="<?php echo $_GET['search'];?>" placeholder="Enter your keyword" aria-label="Search">
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
                                              $stmt = $conn->prepare("SELECT * FROM blogs Order By created_on DESC");
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




<section class="mt-5 d-none d-sm-block">
<div class="d-flex flew-row position-relative" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 110px;z-index:2;" id="red">
    <div class=" textClass3 ">
        <img src="asset/images/fsubscription.png" class="fs" >
        <h2 class="text-uppercase fw-semibold  ms-3" style="    margin-left: 216px;"> Our<br>Newsletter</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 51.5%; height: 69px;margin-left: -25px;z-index:1;" id="green">  
    <div class=" textfooter" >
       <div class="special-right d-flex justify-content-center align-items-center p-3" style="margin-left: 95px;
    width: 517px;
}">
    <div class="input-group">
        <input type="email" class="form-control" placeholder="Enter your e-mail address" aria-label="Email Address" required>
        <button class="btn btn-danger" type="button">
                <i class="fa-solid fa-paper-plane"></i>
        </button>
    </div>
</div>
<div class=" d-flex flex-row  align-items-center ">
</div>
</div>
</div>
</div>
</section>


<section class="newsletter-section newsletter-bg-yellow d-block d-md-none" id="newsletter-section">
  <div class="row newsletter-row position-relative newsletter-layout-row">

     <!--First Column: Newsletter Heading -->
      <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center newsletter-layout-col">
                <div class="newsletter-heading-wrapper d-flex align-items-center">
                    <img src="asset/images/fsubscription.png" alt="Subscription Image" class="me-0">
                    <h2 class="newsletter-heading text-uppercase fw-semibold text-white ms-3">Our<br>Newsletter</h2>
                </div>
            </div>

     <!--Second Column: Email Input for Mobile -->
    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center newsletter-layout-col newsletter-bg-blue d-block d-md-none">  
       <!--This section will only display on mobile devices -->
      <div class="newsletter-input-wrapper">
        <div class="input-group newsletter-input-group">
          <input type="email" class="newsletter-email-input form-control" placeholder="Enter your e-mail address" aria-label="Email Address" required>
          <button class="btn btn-danger newsletter-submit-btn" type="button">
            <i class="fa-solid fa-paper-plane"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
 

<?php include 'footer2.php';?>