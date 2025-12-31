<?php include'header2.php';?>

<section class="page-title " style="background-image: url(https://cdn.cbeditz.com/cbeditz/preview/grey-color-powerpoint-background-download-116244794836vfxbsxxwa.jpeg); height:200px;   
">
<nav aria-label="breadcrumb" class="py-5 "style="  margin-left: 134px;">
  <h1 class=" fw-bold story">Our Team</h1>
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item "><a href="https://edugst.demovoting.com/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
  </ol>
</nav>
</section>

 <?php
                $conn = $pdo->open();
                $id = $_GET['id'];
                try{
                  $stmt = $conn->prepare("SELECT * FROM our_team WHERE id='$id'");
                  $cnt=1;
                  $stmt->execute();
                  foreach($stmt as $row){
                    $image = (!empty($row['image'])) ? 'admin/assets/images/team/'.$row['image'] : 'assets/images/users/profile.jpg';
                    
            ?>
  
<section class="py-3" style="background-color:#f8f8f8; ">
  <div class="container py-5 anime1">
   
    <div class="row pt-4">
          <div class="youtube col-12 col-5 col-lg-5 text-center">
       <img src="<?php echo $image;?>" class="rounded-circle mx-auto d-block shadow" alt="Image" style="width: 300px; height: 300px;">
        <h5 class="py-4 heading1 "><span class="fw-bold">  <?php echo $row['designation'];?>  </span> <?php echo $row['name'];?> </h5>
           <!-- Social Media Links -->
    <div class="social-links py-3" style=" margin-top: -30px;margin-left: -20px;   font-size: 0.78rem;">
      <a href="https://www.facebook.com/cmadipak.joshi?mibextid=ZbWKwL"  class=" mx-2 text-decoration-none text-dark">
   <i class='bx bxl-facebook-circle fa-2x'></i>
      </a>
      <a href="https://www.instagram.com/_edu_gst_/"  class="mx-2 text-decoration-none text-dark">
<i class='bx bxl-instagram-alt fa-2x'  ></i>
      </a>
     <a href="https://wa.me/9922159279"  class="mx-2 text-decoration-none text-dark">
         <i class='bx bxl-whatsapp-square fa-2x'></i>
        </a>
      <a href="https://www.youtube.com/@edu-gst2716"    class="m-2 text-decoration-none text-dark">
    <i class='bx bxl-youtube fa-2x ' ></i>
      </a>
    </div>
      </div>


      
      <div class="col-12 col-lg-7">
          <p class="heading1 " style="text-align:justify;"> <?php echo $row['description'];?> </p>

    </div>
  </div>
</section>
 <?php 
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>       

<?php include 'footer2.php';?>