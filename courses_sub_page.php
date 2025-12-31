<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Courses_deails</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="courses_details, edugst">
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

<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/cdetails.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%; height: 58px; z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >COURSE  </h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">COURSE DETAIL'S </span></span>

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
                    $slug = $_GET['slug'];
                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_course WHERE slug='$slug'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                        $banner = (!empty($row['banner'])) ? 'admin/assets/images/course/banner/'.$row['banner'] : 'assets/images/users/profile.jpg';
                        $image = (!empty($row['image'])) ? 'admin/assets/images/course/'.$row['image'] : 'assets/images/users/profile.jpg';
                        $c_image = (!empty($row['c_image'])) ? 'admin/assets/images/course/contain/'.$row['c_image'] : 'assets/images/users/profile.jpg';
                        
    ?>

<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/cdetails.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px; width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">COURSE DETAIL'S </h2>
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
            <span class="fw-semibold" style="color: #194369;">COURSE DETAIL'S </span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5">  <div class="container" >
      <div class="row col-md-12">
            <!-- Left Image (Larger) -->
            <div class="col-lg-8 mb-3 p-4" >
                 <b class="heading1" style="text-bold;font-size:25px"><?php echo $row['name'];?></b>
                <p class=" heading1"><?php echo $row['subtitle'];?></p>
                <?php
                    include'includes/config.php';
                    $query=mysqli_query($conn,"SELECT * from  tbl_c_teacher join our_team on our_team.id=tbl_c_teacher.teacher_id where tbl_c_teacher.course_id='".$row['id']."'");
                    while($row2=mysqli_fetch_array($query))
                    {
              ?> 
              
              
              
                 <div class="py-3 p-4 shadow" style="border-radius:10px">
                    <p class="card-text d-flex align-items-center fw-bold   me-1 ">
                    <img src="admin/assets/images/team/<?php echo $row2['image'];?>" class=" me-2 heading rounded-circle " style="    height: 100px;
                      width: 100px;" alt="Instructor Image"> By <?php echo $row2['name'];?> </p>
                </div>
                
                
                
                
                <?php } ?>
                <br>
                <img src="<?php echo $image;?>" class="img-fluid course-image shadow  image-center" alt="Left Image" style="border-radius:10px">
                <br><br>
                <div class="py-3 p-4" style="box-shadow: rgba(100, 100, 111, .2) 0 .438rem 1.813rem 0;border-radius:10px">
                    <h5 class="fw-bold heading1">About the Courses</h5>
                   <p class="heading1" style="text-align:justify;" > <?php echo $row['about'];?> </p>
               <div>
              
                <div class=" py-5 heading " style=" text-align: justify;">  
                   <?php echo $row['contain'];?>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-5  p-4" >
            <div class="col-md-6" >
                <div class="certificate">
                    <h3 class="heading-mb-8">Course Completion Certificate </h3>
                    <p class="heading">Add this certificate to your resume to demonstrate your skills &amp; increase your chances of getting noticed.</p>
                </div>
            </div>
        <!-- Right Side Image -->
            <div class="col-md-6">
                <img src="<?php echo $c_image;?>" alt="Certificate Image" width="300" height="200" class="certificate-img">
            </div>
        </div>  
    </div>
                 <!-- Right Scrolling Content (Smaller) --> 
   <div class="col-lg-4 mb-3  border  p-5" style="max-height: 750px; position: sticky; top: 130px; overflow-y: auto;border-radius:10px;box-shadow: rgba(100, 100, 111, .2) 0 .438rem 1.813rem 0;">
                           <!--height:600px; overflow-y:scroll;">-->    
                   
            <div class="d-flex align-items-center mb-2">
            <i class="fa fa-user-tie me-2" style="font-size:15px"></i>
            <b class="heading1" style="font-size:15px">Expert</b>
        </div>
        <div class="d-flex align-items-center mb-2" >
             <i class="fa fa-clock me-2" style="font-size:15px"></i>   
            <b class="heading1" style="font-size:15px">30 hrs Duration</b>
        </div>
        <div class="d-flex align-items-center mb-2">
          <i class="fa fa-sync-alt me-2" style="font-size:15px"></i>
            <b class="heading1" style="font-size:15px">  <?php echo date("d-m-Y", strtotime($row['creation_on'])) ?> Last Updated</b>
        </div>
       <div class="d-flex align-items-center mb-4">
           <i class="fa fa-certificate me-2"></i>
            <b class="heading1">Certification of Completion</b>
        </div>  
        
        
        <div class="d-flex flex-column px-5">
            
          
            
            <div class="px-2 py-2 bg-secondary fw-bold text-center rounded-pill mb-3">
                        <a href="javascript:void(0)"  class=" text-decoration-none text-white fs-6 mx-auto">  <span>
               ₹<?php echo $row['price'];?>  <del >₹<?php echo $row['mrp'];?></del> 
            </span></a>
            </div>
            
            
            <div class="px-2 py-2 bg-danger text-center fw-bold text-white rounded-pill">
                <a href="<?php echo $row['url'];?>"  class="text-decoration-none text-white fs-6">Enroll Now</a>
            </div>
          
        </div>
          <hr>
          <div>
              <b class="py-1 heading" style="font-size:15px">A Courses By</b>
              <p class="card-text align-items-center" >
             <img src="asset/images/dipak.jpg"
             class="rounded-circle me-2 heading1" height="60" width="60" alt="Instructor Image"> By <?php echo $row['teacher'];?> </p>
                 
          </div>
           <?php
                    // include'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT * from tbl_course_type where c_id='$id'");
                   
              ?>     
          <hr>
            <div class="py-2 heading">
              <b class="heading1" style="font-size:15px">Material Includes</b>
              <ul>
               <?php 
                while($row2=mysqli_fetch_array($query))
                    {
                ?>
              <li><?php echo $row2['name'];?></li>
               <?php } ?>
               </ul>
        </div>
        
        
        
        
        
    </div>
</section>
<script>
    document.querySelectorAll('.enroll-button').forEach(button => {
        button.addEventListener('click', function() {
            this.innerHTML = '<i class="fa fa-shopping-cart"></i> View Cart';
        });
    });
</script>



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