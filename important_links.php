

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Important Links</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="important links, edugst">

 
</head>







<?php include'header2.php';?>


<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%;background-image: url('asset/images/imp.webp');  height: 500px;  background-attachment: fixed;
background-position: top;
background-repeat: no-repeat;
background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold ">Important Links </h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:14px;"></i><span class="fw-semibold" style="color:#194369;  margin-left: -12px;">Important Links </span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>

</div>





<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/imp.webp');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px; width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">IMPORTANT LINKS</h2>
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
            <span class="fw-semibold" style="color: #194369;">IMPORTANT LINKS</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="py-5">
    <div class="container">
           <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_link WHERE status='Active'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
        <!--<div class=" border p-3 mb-3 center heading1"style="background-color: #F5F5F4; max-width: 100%; width: 100%; ">-->
        <!--    <div class="row">-->
        <!--        <div class="col-12">-->
                           
        <div class="border p-3 mb-3 center "style="background-color: #F5F5F4; max-width: 100%; width: 100%; ">
            <span class="me-2 fw-bold">
                    <span class="me-2 heading1 fw-bold"><?php echo $row['name'];?></span>
                <!--</div>-->
                <div class=" text-center mt-2"> 
                    <!--<a href="<?php echo $row['url'];?>" role="button" aria-haspopup="menu" class="btn btn-link d-flex align-items-center justify-content-center border-0 p-0" style="    margin-top: -33px;" target="_blank">-->
                    <!--    <svg viewBox="0 0 24 24" fill="currentColor" class="heading1" width="1em" height="1em">-->
                    <!--        <path fill-rulex="evenodd" d="M10.87 4h2v8.048l3.187-3.185 1.414 1.414-5.598 5.597-5.63-5.596 1.41-1.418 3.218 3.198V4zm6.991 11.992h2v4H4v-4h2v2h11.861v-2z"></path>-->
                    <!--    </svg>-->
                    <!--    <span class="ms-2 heading1">LINK</span>-->
                        
                    <!--</a>-->
                    <a href="<?php echo $row['url'];?>" role="button" aria-haspopup="menu" class="btn btn-link fw-bold d-flex align-items-center justify-content-center border-0 p-0 link-button heading1" target="_blank" style="    margin-top: -30px;  margin-left: 240px;    text-decoration: none;">
    <svg viewBox="0 0 24 24" fill="currentColor" class="heading1" width="1em" height="1em">
     <path fill-rule="evenodd" d="M10.87 4h2v8.048l3.187-3.185 1.414 1.414-5.598 5.597-5.63-5.596 1.41-1.418 3.218 3.198V4zm6.991 11.992h2v4H4v-4h2v2h11.861v-2z"></path>
<!--<i class="fa-solid fa-download" style="color:#0d83fb;"></i>-->
    </svg>
    <span class="ms-2  heading1 fw-bold" >LINK</span>
</a>

                </div>
            </div>
        <!--</div>-->
    <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>    
      
    </div>
</section>




<!--<section>-->
<!--    <div class="container">-->
<!--        <div class="article-list">-->
<!--        <div class="article-item">-->
<!--            <span>Building Trust (pdf)</span>-->
<!--            <a href="#">Download</a>-->
<!--        </div>-->
<!--        <div class="article-item">-->
<!--            <span>Building Empathy (pdf)</span>-->
<!--            <a href="#">Download</a>-->
<!--        </div>-->
<!--        <div class="article-item">-->
<!--            <span>Productivity and Time Management Figma Content (pdf)</span>-->
<!--            <a href="#">Download</a>-->
<!--        </div>-->
<!--        <div class="article-item">-->
<!--            <span>Goal Setting - The Hiregange Bridge (pdf)</span>-->
<!--            <a href="#">Download</a>-->
<!--        </div>-->
<!--        <div class="article-item">-->
<!--            <span>Procrastination (pdf)</span>-->
<!--            <a href="#">Download</a>-->
<!--        </div>-->
<!--    </div>-->

<!--    </div>-->
       


<!--</section>-->


<br>
<br>



<?php include 'newsadd.php';?>










<?php include 'footer2.php';?>