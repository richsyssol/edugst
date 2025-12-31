<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Media</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="media, edugst">

 
</head>

<?php include'header2.php';?>


<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%;background-image: url('asset/images/media.jpg');  height: 500px;  background-attachment: fixed;
background-position: top;
background-repeat: no-repeat;
background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold ">MEDIA</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:14px;"></i><span class="fw-semibold" style="color:#194369;  margin-left: -12px;">MEDIA</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>




<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/media.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0" style="height: 100px;width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">MEDIA</h2>
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
            <span class="fw-semibold" style="color: #194369;">MEDIA</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="">
    <div class="container mt-5">
        <div class="row py-5">
            <!-- Card 1 -->
             <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_photos Order By creation_on DESC");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/photos/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                ?>
            <div class="col-md-4 ">
                <div class="card shadow">
                    <img src="<?php echo $image;?>" class="card-img-top rounded" height="300" alt="<?php echo $row['name'];?>" data-bs-toggle="modal" data-bs-target="#imageModal1">
                    <div class="card-body">
                        <p class=" mahh1 " style="text-align: justify;"><?php echo $row['name'];?></p>
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
            <!-- Card 2 -->
           <!-- <div class="col-md-4">
                <div class="card shadow">
                    <img src="https://igenius.demovoting.com/admin/assets/images/news/198332.jpeg" class="card-img-top" height="300" alt="News Image 2" data-bs-toggle="modal" data-bs-target="#imageModal2">
                    <div class="card-body">
                        <h5 class="card-title">Goods and Services Tax (GST)</h5>
                    </div>
                </div>
            </div>-->
           
        </div>
    </div>
    
  
    


    <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModal1Label">News Image 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            
                            <?php
                                $conn = $pdo->open();
                                
                                try {
                                    $stmt = $conn->prepare("SELECT * FROM photo_detail Order By creation_on DESC");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    foreach ($rows as $key => $row) {
                                        $imagePath = (!empty($row['image'])) ? 'admin/assets/images/photos/details/' . $row['image'] : 'assets/images/users/profile.jpg';
                                        ?>
                                        <div class="carousel-item <?php echo ($key == 0) ? 'active' : ''; ?>" style="height:546px;">
                                            <img src="<?php echo $imagePath;?>" class="d-block w-100" height="500" alt="Image <?php echo $key + 1; ?>">
                                        </div>
                                        <?php
                                    }
                                } catch (PDOException $e) {
                                    echo $e->getMessage();
                                }
                                
                                $pdo->close();
                                ?>
                            
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
<br>
<br>

<br>



<?php include 'newsadd.php';?>





<?php include 'footer2.php';?>