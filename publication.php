
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Publication </title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="publication, edugst">

 
</head>


<?php include'header2.php';?>




<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/publication.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >Publication</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">Publication</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>





<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/publication.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px;width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">PUBLICATION</h2>
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
            <span class="fw-semibold" style="color: #194369;">PUBLICATION</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="py-5">
    <div class="container">
        <div class="row">
              <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_publication WHERE status='Active'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['file'])) ? 'admin/assets/images/publication/'.$row['file'] : 'assets/images/users/profile.jpg';
                        
                        ?>
            <div class="col-md-4">
                <div class="card shadow d-flex flex-column h-100">
                    <img src="<?php echo $image;?>" class="Imgs" alt="Card Image 1" style="height:300px;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title "><?php echo $row['name'];?></h5>
                        <p class="card-text heading1 "><?php echo $row['date'];?> | <?php echo $row['academy'];?></p>
                        <p class="text-muted"><?php echo $row['subtitle'];?></p>
                        <div class="mt-auto py-4">               
                            <!--<button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#orderModal">BUY NOW</button>-->
                             <a href="<?php echo $row['url'];?>" target="_blank" class="btn  btn-danger px-4 heading1" style="border-radius: 0;">BUY NOW</a>
                        </div>
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


    <!-- Modal -->
<!--    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <h5 class="modal-title" id="orderModalLabel">Order Form</h5>-->
<!--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    <form>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="name" class="form-label">Name</label>-->
<!--                            <input type="text" class="form-control" id="name" required>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="contactNumber" class="form-label">Contact Number</label>-->
<!--                            <input type="text" class="form-control" id="contactNumber" required>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="email" class="form-label">Email</label>-->
<!--                            <input type="email" class="form-control" id="email" required>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="organization" class="form-label">Organization</label>-->
<!--                            <input type="text" class="form-control" id="organization" required>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="postalAddress" class="form-label">Postal Address with Pin Code</label>-->
<!--                            <input type="text" class="form-control" id="postalAddress" required>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="copiesRequired" class="form-label">Number of Copies Required</label>-->
<!--                            <input type="number" class="form-control" id="copiesRequired" required>-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-danger">Submit</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->





<!--<section class="py-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4">-->
<!--                <div class="card shadow d-flex flex-column h-100">-->
<!--                    <img src="https://ttpl.imgix.net/9789357782579L.jpg?w=1200" class="card-img-top" alt="Card Image 1">-->
<!--                    <div class="card-body d-flex flex-column flex-grow-1">-->
<!--                        <h5 class="card-title">Practical Guide to GST on Real Estate Industry</h5>-->
<!--                        <p class="card-text">September 2023 | Hiregange Academy</p>-->
<!--                        <h5>March 2022 | Bloomsbury Publications CA Virender Chauhan, CA Sudhir VS, CA Roopa Nayak</h5>-->
<!--                        <div class="mt-auto py-4">               -->
<!--                            <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#orderModal">BUY NOW</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="card shadow d-flex flex-column h-100">-->
<!--                    <img src="https://ttpl.imgix.net/9789357783248L.jpg?w=1200" class="card-img-top" alt="Card Image 2">-->
<!--                    <div class="card-body d-flex flex-column flex-grow-1">-->
<!--                        <h5 class="card-title">Practical Guide to GST on Real Estate Industry</h5>-->
<!--                        <p class="card-text">September 2023 | Hiregange Academy</p>-->
<!--                        <h5>March 2022 | Bloomsbury Publications CA Virender Chauhan, CA Sudhir VS, CA Roopa Nayak</h5>-->
<!--                        <div class="mt-auto py-4">               -->
<!--                            <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#orderModal">BUY NOW</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <div class="card shadow d-flex flex-column h-100">-->
<!--                    <img src="https://ttpl.imgix.net/9789357783644L.jpg?w=1200" class="card-img-top" alt="Card Image 3">-->
<!--                    <div class="card-body d-flex flex-column flex-grow-1">-->
<!--                        <h5 class="card-title">Practical Guide to GST on Real Estate Industry</h5>-->
<!--                        <p class="card-text">September 2023 | Hiregange Academy</p>-->
<!--                        <h5>March 2022 | Bloomsbury Publications CA Virender Chauhan, CA Sudhir VS, CA Roopa Nayak</h5>-->
<!--                        <div class="mt-auto py-4">               -->
<!--                            <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#orderModal">BUY NOW</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<br>
<br>

<br>




<?php include 'newsadd.php';?>








<?php include 'footer2.php';?>