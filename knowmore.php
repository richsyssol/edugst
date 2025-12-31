
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Know More</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="know more, edugst">

 </head>



<?php include'header2.php';?>
<style>
.boxe{
            position: sticky;
        top: 12rem;
        transition: position .9s ease;
        flex-basis: 25%;
        padding: 1.875rem;
        box-shadow: rgba(100, 100, 111, .2) 0 .438rem 1.813rem 0;
        border-radius: .75rem;
        margin-bottom: 9.5rem;
}
</style>










<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/knowmore.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold ">Know More</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:14px;"></i><span class="fw-semibold" style="color:#194369;  margin-left: -12px; ">Know More</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>






<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/knowmore.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px;width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">WEBINAR</h2>
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
            <span class="fw-semibold" style="color: #194369;">KNOW MORE</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>

















  <?php
                    $conn = $pdo->open();

                    try{
                        $id = $_GET['id'];
                      $stmt = $conn->prepare("SELECT * FROM tbl_webinar WHERE id='$id'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['image'])) ? 'admin/assets/images/webinar/'.$row['image'] : 'assets/images/users/profile.jpg';
                        
                        ?>



<section class="py-5" style="background-color:#adb5bd;" >
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class=" story mt-2 text-black heading1">Webinar Details</h2>
       </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="border-box" style="border-radius:1.875rem">
                        <center><h5 class="text-black">Date : <?php echo $row['date'];?></h5></center>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="border-box " style="border-radius:1.875rem">
                        <center><h5 class="text-black">Time : <?php echo $row['start'];?> - <?php echo $row['end'];?></h5></center>
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="py-5">
    <div class="container" >
       
   
        <div class="row col-md-12">
            <!-- Left Image (Larger) -->
                    <b class="heading1" style="text-bold;font-size:25px"><?php echo $row['name'];?></b>
            <div class="col-lg-8 mb-3 p-4" >
                <img src="<?php echo $image;?>" class="img-fluid course-image shadow  image-center" alt="Left Image" style="border-radius:10px">
                <br><br>
                <div class="py-3 p-4" style="box-shadow: rgba(100, 100, 111, .2) 0 .438rem 1.813rem 0;border-radius:10px">
                   <?php echo $row['content'];?>
               <div>
            </div>
        </div>
    </div>
    <!-- Right Scrolling Content (Smaller) --> 
   <div class="col-lg-4 mb-3 border p-5" style="max-height: 550px; position: sticky; top: 130px; overflow-y: auto;border-radius:10px;box-shadow: rgba(100, 100, 111, .2) 0 .438rem 1.813rem 0;">
       <!--height:600px; overflow-y:scroll;">-->    
        <center><div id="response"></div></center>
        <h3 class="fw-bold py-3">Save Your Spot!</h3>
        <form action="spot_add.php" method="post">
        <input type="hidden" name="w_id" value="<?php echo $row['id'];?>">
        <div class="form-group">
            <label for="name" class="p-2">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder=" Your Name" style="border-radius:1.85rem">
        </div>
        <br>
         <div class="form-group">
        <label for="email" class="p-2">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" style="border-radius:1.85rem">
        </div>
        <br>
        <div class="form-group">
          <label for="contact" class="p-2">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Your contact number" style="border-radius:1.85rem">
        </div><br>
        <!--<button type="submit" class="btn btn-danger rounded-pill " style="    padding: 10px 26px !important;" >Submit</button>-->
        <div class="d-flex justify-content" >
        <button type="submit" name="Submit" class="btn btn-danger  px-4 py-2" style="border-radius:1.85rem">Submit</button>
        &nbsp;
         <button type="reset" class="btn btn text-white  px-4 py-2" style="border-radius:1.55rem; background-color: #0e385e;">Reset</button>
        </form>
    </div>
</section>
<script>
    document.querySelectorAll('.enroll-button').forEach(button => {
        button.addEventListener('click', function() {
            this.innerHTML = '<i class="fa fa-shopping-cart"></i> View Cart';
        });
    });
</script>
 <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>  





<?php include 'newsadd.php';?>








<?php include 'footer2.php';?>