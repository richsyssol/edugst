
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Glossary details</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="glossary details, edugst">

 
</head>



<?php include'header2.php';?>



<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/gdetails.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >GLOSSARY</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">GLOSSARY DETAILS</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>




<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/gdetails.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px;width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">GLOSSARY </h2>
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
            <span class="fw-semibold" style="color: #194369;">GLOSSARY DETAILS</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>



<br>

    <?php
        include'includes/config.php';
        $id=$_GET['name'];
        $query=mysqli_query($conn,"SELECT * from tbl_glossary_list where title='$id' limit 1");
        while($row=mysqli_fetch_array($query))
        {
    ?>
<section class="py-5">
    <div class="container">
        <div class=" p-4 rounded">
            <nav aria-label="breadcrumb">
            <!--    <ol class="breadcrumb">-->
            <!--        <li class="breadcrumb-item"><a href="#">Glossary</a></li>-->
            <!--        <li class="breadcrumb-item active" aria-current="page">Accounting Standards</li>-->
            <!--    </ol>-->
            <!--</nav>-->
            <h1 class="mb-4 heading1"><?php echo $row['title'];?></h1>
            <div class="content ">
              <p class="heading">  <?php echo $row['description'];?></p> 
            </div>
            <!--<div class="mt-4">-->
            <!--    <a href="https://www.taxmann.com/academy/" class="d-block">-->
            <!--        <img src="https://cdn.taxmann.com/taxmann-images/advertisements/alphabetical-topic-adds-2.png" class="img-fluid" alt="Advertisement">-->
            <!--    </a>-->
            <!--</div>-->
        </div>
    </div>
</section>
<?php } ?>
<section>
<div class="container py-5">
    <div class="row align-items-center curious py-5">
        <div class="col-md-6">
            <h1 class="heading1">Curious to learn more about Taxation and Finances?</h1>
            <p class="heading1">Explore the intricacies of Indian tax and financial practices with the support of our expert educators.</p>
            <a href="course.php" class="btn btn-custom  btn-danger py-2 fw-bold mt-3">Start Learning Now</a>
        </div>
        <div class="col-md-6 text-center heading1">
            <img src="asset/images/img1.png" alt="Educator Image" class="img"  height="300" width="400" style="    margin-left: 629px;
    margin-top: -249px;">
        </div>
    </div>
</div>
</section>


<br>
<br>


<?php include 'newsadd.php';?>









<?php include 'footer2.php';?>