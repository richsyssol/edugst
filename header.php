<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst</title>

    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    
    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    
    
    <!--cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
    
    <!--font family-->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="asset/images/favicon.png" type="image/x-icon">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  



    <style>


    .logo{
width: 30%;
position: relative;

   transform: skewX(-20deg);
   margin-left: -20px;
   padding-left:40px; 
}
.logo_img{
    position:absolute;
    aspect-ratio: 16 / 9; 
    width: 120%;
    height: 100%;
/*    border:2px solid red;*/
     transform: skewX(20deg);
}
.logo_img{
     position: absolute; /* Position absolute to fill the container */
            top: 10%; /* Center the image vertically */
            left: 20%; /* Center the image horizontally */
            width: 100%; /* Make image fill the container width */
            height: 100%; /* Make image fill the container height */
            object-fit: cover; /* Cover the container while maintaining aspect ratio */
            transform: translate(-50%, -50%); 
                 transform: skewX(20deg);
}

    
    .menu{
width: 70%;
    
    /*clip-path: polygon(42.25% 25%, 75% 25%, 75% 75%, 25% 75%);*/


   /*transform: skew(-45deg);*/
    }
    

@media(max-width:768px){
    .navbar>.container-fluid{
    display:block!important;
}
}




    </style>
</head>

<body>
  




<div class="d-none d-sm-flex flex-row justify-content-around w-100" style="background-color:#5a2176; position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
    <div class="logo py-3" style="background-color:white;">
        <div class="logo_img ps-5">
           <img src="asset/images/edulogo.jpg" width="30%" style="margin-left:90px;">
        </div>
    </div>
    <div class="menu py-3">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link active px-3" aria-current="page" href="index">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link px-3 text-white" href="about">About</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link px-3 text-white" href="course">Courses</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link px-3 text-white" href="webinar">Webinar</a>
                        </li>
                        <li class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resource
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Academy's_Newsletter">Academy's Newsletter</a></li>
                                <li><a class="dropdown-item" href="publication">Publication</a></li>
                                <li><a class="dropdown-item" href="important_links">Important Links</a></li>
                                <li><a class="dropdown-item" href="glossary">Glossary</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 text-white" href="blog">Blog</a>
                        </li>
                        <li class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="media">Media</a></li>
                                <li><a class="dropdown-item" href="videos">Videos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 me-2 text-white" href="contactus">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>











































<div class="d-block d-sm-none">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="asset/images/edulogo.jpg" width="30%"></a>
    <button class="navbar-toggler" style="margin-left:44%;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="course">Course</a>
        </li> <li class="nav-item">
          <a class="nav-link" href="webinar">Webinar</a>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
     Resourse
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="blog">Blog</a>
        </li>
      
             
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="contactus">Contact Us</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
</div>






<!-- Navigation Bar --> 
<!--<nav class="navbar navbar-expand-lg navbar-light color py-1 " id="StickyNav" style="background-repeat:no-repeat; margin-left:margin-left: 171px; background-size: cover;" >-->

<!--<div class="d-flex flex-row justify-content-between w-100 " style="background-color:#773797;">-->
<!--    <div class="logo  py-3" style="background-color: white;">-->
<!--        <div class="d-flex logo1" style="margin-left: 225px;">-->
        <!-- Logo -->
<!--    <a class="navbar-brand" href="index">-->
<!--      <img src="https://edugst.demovoting.com/asset/images/edulogo.jpg" alt="edugst" style="max-height:70px; width:140px;">-->
<!--    </a>-->
<!--   </div>-->
<!--    </div>-->
<!--    <div class="menu  py-3">-->
            <!-- Navbar toggle -->
<!--    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">-->
<!--      <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
         <!-- xCollapse -->
<!--    <div class="collapse navbar-collapse nav-menu me-2 menu " id="navbarCollapse">-->
      <!-- Nav -->
<!--      <div class="navbar-nav mx-lg-auto">-->
<!--        <a class="nav-link active px-3" aria-current="page" href="index">Home</a>-->
<!--        <a class="nav-link px-3" href="about">About Us</a>-->
<!--        <a class="nav-link px-3" href="course">Courses</a>-->
<!--        <a class="nav-link px-3" href="webinar">Webinar</a>-->
<!--        <div class="nav-item dropdown me-2">-->
<!--          <a class="nav-link dropdown-toggle text-dark px-3" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--            Resources-->
<!--          </a>-->
<!--          <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">-->
<!--            <li><a class="dropdown-item" href="Academy's_Newsletter">Academy's Newsletter</a></li>-->
<!--            <li><a class="dropdown-item" href="publication">Publication</a></li>-->
<!--            <li><a class="dropdown-item" href="important_links">Important Links</a></li>-->
<!--            <li><a class="dropdown-item" href="glossary">Glossary</a></li>-->
<!--          </ul>-->
<!--        </div>-->
<!--        <a class="nav-link px-3" href="blog">Blog</a>-->
<!--        <div class="nav-item dropdown me-2">-->
<!--          <a class="nav-link dropdown-toggle text-dark px-3" href="#" id="mediaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--            Media-->
<!--          </a>-->
<!--          <ul class="dropdown-menu" aria-labelledby="mediaDropdown">-->
<!--            <li><a class="dropdown-item" href="media">Media</a></li>-->
<!--            <li><a class="dropdown-item" href="videos">Videos</a></li>-->
<!--          </ul>-->
<!--        </div>-->
<!--        <a class="nav-link px-3 me-2" href="contactus">Contact Us</a>-->
<!--      </div>-->
<!--    </div>-->
<!--    </div>-->
<!--</div>-->
<!-- </div>-->
<!--</nav>-->

<!-- Subscribe Newsletter Section -->
<div id="subscribeSection" class="container-fluid p-1 d-none d-sm-block clrp " style="background-color:yellow;  background-repeat:no-repeat; background-position: center; background-size: cover;margin-top:5.5rem;">
  <div class="d-flex flex-sm-row flex-column justify-content-between align-items-center">
    <div class="mb-3 mb-sm-0"></div>
    <div class="d-flex flex-row align-items-center">
      <span class="text-dark me-sm-3 me-0 mb-2 mb-sm-0">Subscribe Newsletter</span>
      <button class="btn btn-outline-dark rounded-pill ms-3 ms-sm-0" data-bs-toggle="modal" data-bs-target="#SubscribeModal">Subscribe</button>
    </div>
  </div>
</div>

















<!-- Enquiry Modal -->
<div class="modal fade" id="SubscribeModal" tabindex="-1" aria-labelledby="SubscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SubscribeModalLabel">Subscribe to Newsletter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                
                <form  method="post" action="subscribe_add.php">
                    
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter your contact number" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>




    
    <!--header-line-->
            
   


<script>
    document.getElementById('subscribeForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Handle form submission here (e.g., send data to server)
         $('#SubscribeModal').modal('hide');
        // alert('Thank you for subscribing!');
       const Timeout=setTimeout(()=>{
            alert('Thank you for subscribing!');
       },500)
    });
</script>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaA



    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqABP7gMsmqHXXdBm7LtTLJ3zG7kppeu6xq8Ptyo0aFsc9a7mM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGFxL2FKzt1rE9xNlwFf5xEJ0URy0wYduRF0zYdCFyI3" crossorigin="anonymous"></script>
    
    
</body>

</html>
