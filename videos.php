
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Video</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="video, edugst">

 
</head>




<?php include'header2.php';?>



<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/video1.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Video's</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">VIDEO'S</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>




<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/video1.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px;width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">VIDEO'S</h2>
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
            <span class="fw-semibold" style="color: #194369;">VIDEO'S</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


   <section>
      <div class="container">
        <div class="row align-items-center">
              <div class="col-12 py-5 col-sm-6 mx-auto">
            <!--<h2 class="story py-5 text-center titleTag heading1">LATEST VIDEO </h2>-->
                <div class="owl-carousel owl-theme">
        </div>
            <!--<div class="col-12 text-center py-3">-->
            <!--    <h2 class="story titleTag">LATEST VIDEO</h2>-->
            <!--</div>-->
        </div>
        <div class="row">
             <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_videos");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        //$image = (!empty($row['image'])) ? 'admin/assets/images/photos/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                ?>
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="position-relative">
                    <iframe class="shadow" width="100%" height="315" style="border-radius:15px;" src="<?php echo $row['video_url'];?>" title="<?php echo $row['name'];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"allowfullscreen></iframe>
                     <div class="position-absolute w-100  h-100 top-0 d-flex justify-content-center align-items-center">
                    <button class="btn btn-danger play-video-btn " data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video-url="<?php echo $row['video_url'];?>"
                                            style="    margin-top: 3px;
                                                         margin-left: 14px;
                                                    height: 52px;
                                                    width: 90px;"> Play </button>
                                                    </div>
                                                    
                        <!--<button class="btn btn-danger play-video-btn p-4 hvideo" data-bs-toggle="modal" data-bs-target="#videoModal"-->
                        <!--data-video-url="https://www.youtube.com/embed/uv5qg56TFFA?si=p4ekjXs3-C3MxsnG">-->
                        <!--<i class="fas fa-play" ></i></button>-->
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

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="ratio ratio-16x9">
                    <iframe id="videoFrame" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>


<?php include 'newsadd.php';?>








<script>
document.addEventListener('DOMContentLoaded', function () {
    var videoModal = document.getElementById('videoModal');
    var videoFrame = document.getElementById('videoFrame');
    var playButtons = document.querySelectorAll('.play-video-btn');

    playButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var videoSrc = button.getAttribute('data-video-url');
            videoFrame.src = videoSrc;
        });
    });

    videoModal.addEventListener('hidden.bs.modal', function () {
        videoFrame.src = '';
    });
});
</script>
<script>
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });
});
</script>


<?php include 'footer2.php';?>