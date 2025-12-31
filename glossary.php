<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst | Glossary</title>
    <meta name="description" value="We are a leading centre for in-depth education and training in Goods and Services Tax (GST).
We are committed in providing individuals, businesses, and professionals with the expertise skills
to navigate the complexities of GST with proficiency. Through our expert-led training programs we
aim to bridge the knowledge gap and prepare you to achieve the next elevation – for organizations
and yourselves.">
<meta name="keyword" value="glossary, edugst">

 
</head>



<?php include'header2.php';
 include'includes/config.php';
?>




<div class="d-flex flew-row position-relative d-none d-sm-block" style="width: 100%; background-image: url('asset/images/glossary.jpg');  height: 500px;  background-attachment: fixed; background-position: top; background-repeat: no-repeat; background-size: cover;" >
<div class=" position-absolute bottom-0 " style="width: 50%;height: 80px;z-index:2;" id="purple">
    <div class=" textClass1 ">
        <h2 class="text-uppercase fw-semibold " >GlOSSARY</h2>
    </div>
</div>

<div class="bg-warning position-absolute bottom-0 start-50 end-0 z-index:;" style="width: 40%;height: 58px;margin-left: -20px;z-index:1;" id="yellow">  
    <div class=" textClass" >
 
    <span class="d-flex align-items-center ">   <a href="index.php"><i class="fa-solid fa-house m-0 p-0 text-white" style="font-size:16px;"></i></a><i class="m-0 p-0 fa-solid fa-angle-right" style
    ="font-size:18px;"></i><span class="fw-semibold text-uppercase" style="color:#194369; font-size:18px;  margin-left: -12px;">GLOSSARY</span></span>

<!--<div class=" d-flex flex-row  align-items-center ">-->
    

<!--    <div class="me-3"><i class="fa-solid fa-house" style="font-size:16px;"></i></div>-->
<!--    <i class="fa-solid fa-angle-right " style="font-size:14px;"></i>-->
<!--    <p class="p-0 m-0 fw-semibold text-uppercase" style="font-size:16px;">About Us</p>-->

<!--</div>-->

    </div>
</div>
</div>




<section class="d-md-none position-relative mb-5" id="newsletter-section"  style="width: 100%; background-image: url('asset/images/glossary.jpg');
  min-height: 500px;   background-attachment: fixed;    background-position: top;   background-repeat: no-repeat;    background-size: cover;">
  <div class="position-absolute bottom-0 " style="height: 100px;width: 97.08%; z-index: 2;" id="blue">
    <div class="row">
      <!-- About Section -->
      <div class="col-12 about11-section d-flex align-items-center justify-content-center py-2">
        <div class="textclass1t">
          <h2 class="text-uppercase fw-semibold text-center text-white">GLOSSARY</h2>
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
            <span class="fw-semibold" style="color: #194369;">GLOSSARY</span>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="education-section">
    <div class="container-fluid">   
      <div class="col-12 col-sm-4 mx-auto mb-5">
         <center><img src="asset/images/star.png" alt="Logo" class="mx-auto " style="width: 60px;"></center>
         <h2 class=" text-center ">Master the Finance Lingo</h2>
         <p class="text-center text-muted fw-semibold">GST TAX OR ACCOUNTING </p>
         <div class="bg-warning mx-auto" style="width:50px;height:3px !important"></div>
      </div>
      
     
      <p class="education-subtext ">As a tax or accounting professional in India, it is essential to understand the terminology and jargon used in the field. Our comprehensive glossary includes all the important terms that you need to know, making it easy for you to communicate effectively and stay on top of your game.
      </p>

     <div class="animation-container">
        <div class="marquee-wrapper">
          <div class="marquee-content">
            <?php
               
                $query=mysqli_query($conn,"SELECT * from tbl_glossary_list  LIMIT 0,10");
                while($row2=mysqli_fetch_array($query))
                {
            ?>  
            <span class="marquee-box btn-color-1 heading  text-white"><?php echo $row2['title'];?></span>
            <?php } ?>
            </div>
        </div>
        <br>
    
        <div class="marquee-wrapper">
          <div class="marquee-content reverse">
               <?php
               
                $query=mysqli_query($conn,"SELECT * from tbl_glossary_list  LIMIT 10,20");
                while($row2=mysqli_fetch_array($query))
                {
            ?>  
            <span class="marquee-box btn-color-11 heading text-white"><?php echo $row2['title'];?></span>
           
           <?php } ?>
          </div>
        </div>
        <br>

   
        <div class="marquee-wrapper">
          <div class="marquee-content">
              <?php
               
                $query=mysqli_query($conn,"SELECT * from tbl_glossary_list  LIMIT 20,30");
                while($row2=mysqli_fetch_array($query))
                {
            ?>  
            <span class="marquee-box btn-color-21 heading text-white"><?php echo $row2['title'];?> </span>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>







<!--<section class="py-5">-->
<!--    <div class="container glossary-section">-->
<!--    <div class="row align-items-center">-->
<!--        <div class="col-md-6 text-center text-md-start glossary-content">-->
<!--            <h2 class="glossary-title fw-bold text-danger">A-Z</h2>-->
<!--            <h2 class="glossary-subtitle heading1 story fw-bold">Glossary</h2>-->
<!--            <p class="glossary-text heading">Any profits arising out of the transfer of a capital asset are treated as capital gains. However, every transfer of a capital asset does not give rise to taxable capital gain because some transactions are not treated as transfer under section 47, or they are excluded from the preview of capital asset under section 2(14), or they enjoy an exemption for reinvestment of capital gains or sales consideration. A capital asset includes every property held by the assessee, being movable or immovable. However, the following assets are excluded from the definition of ‘Capital Assets’ Rural agriculture land; Stock-in-trade; Personal effects except for Jewellery, Archaeological collections, Drawings, Paintings, Sculptures and A capital asset includes every property held by the assessee, being movable or immovable. However, the following assets are excluded from the definition of ‘Capital Assets’ Rural agriculture land; Stock-in-trade; Personal effects except for Jewellery, Archaeological collections, Drawings, Paintings, Sculptures and Any work of art; Specified Bond.</p>-->
          
<!--        </div>-->
<!--        <div class="col-md-6 text-center">-->
<!--            <img src="https://edugst.demovoting.com/admin/assets/images/course/161652.jpg" alt="A-Z Glossary" class="glossary-image shadow">-->
<!--        </div>-->
<!--    </div>-->
<!--</div>  -->
<!--</section>-->


<section>
    <div class="container my-5 "  >
        <!-- Alphabetical Navigation -->
        <div class="alphabet-nav  text-center ">
             <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_keyword WHERE status='Active'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
            <a href="#<?php echo $row['keyword'];?>" class="alphabet-link active "><?php echo $row['keyword'];?></a>
             <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>     
            
        </div>

<!-- Section A -->
 <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM tbl_keyword WHERE status='Active'");
                      $cnt=1;
                      $stmt->execute();
                      foreach($stmt as $row){
                      //  $image = (!empty($row['photo'])) ? 'assets/images/side_banner/'.$row['photo'] : 'assets/images/users/profile.jpg';
                        
                        ?>
<div class="section heading py-5" id="<?php echo $row['keyword'];?>">
    <h1><?php echo $row['keyword'];?></h1>
</div>
<div class="d-flex flex-wrap gap-3 mb-4 heading">
     <?php
       
  $stmt2 = $conn->prepare("SELECT * FROM tbl_glossary_list WHERE key_id = :key_id");
            $stmt2->execute(['key_id' => $row['id']]);
              while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        
    ?>
    <a href="glossary_details.php?name=<?php echo $row2['title'];?>">
        <button class="btn btn-outline-custom fw-bold"><?php echo $row2['title'];?> </button>
    </a>
      <?php } ?>
</div>
  <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>  


</section>





<?php include 'newsadd.php';?>






<?php include 'footer2.php';?>   