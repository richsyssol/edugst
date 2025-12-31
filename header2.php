<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Edu-gst</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    
    
    <!--cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!--owl-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    
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
        .nav-link {
            color: Black !important;
            font-size: 0.2 rem;
         font-family: 'Open Sans', sans-serif;
        }
    
    
.custom-toggler {
    border: 1px solid #000; /* Add border around the button */
    padding: 6px; /* Adjust padding as needed */
    border-radius: 5px; /* Optional: Rounded corners */
}

/* Styling the three lines (hamburger icon) */
.navbar-toggler-icon {
    display: inline-block;
    width: 25px;
    height: 3px;

    position: relative;
}

.navbar-toggler-icon::before,
.navbar-toggler-icon::after {
    content: "";
    display: inline-block;
    width: 25px;
    height: 3px;
    /*background-color: #000;*/
    position: absolute;
    left: 0;
}

.navbar-toggler-icon::before {
    top: -8px; /* Adjust the top position for the first line */
}

.navbar-toggler-icon::after {
    top: 8px; /* Adjust the top position for the third line */
    padding:1px;
}


/* Add hover effect for Home link */
.navbar-nav .nav-link:hover {
  color: black !important; /* Changes text color to red on hover */
}

.navbar-nav .nav-link.active:hover {
  color: black !important; /* Ensures the active state (Home link) also turns red on hover */
}


/* Ensure proper display of navbar when it becomes sticky */
.fixed-top {
  top: 0;
  width: 100%;
  z-index: 1000;
}

#subscribeSection {
  transition: all 0.3s ease; /* Smooth transition */
}


.clrp{
    background-color: #ffee15;
}

@media(max-width:768px){
    .navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, .55);
    color: #000 !important;
}
.logo1{
    margin-left:0px !important;
}
.color{
    background-color:white;
}
#StickyNav{
    background-image:none!important;
}
}
#StickyNav{
    /*background-image:url('asset/images/bgpe1.png');*/
}

.fa-envelope:before {

    margin-left: 19px;
}

/* Hover effect for the subscribe button */
.subscribe-btn {
  color: white;
  border-color: white;
  transition: color 0.3s, background-color 0.3s, border-color 0.3s;
}

.subscribe-btn:hover {
  color: Black; /* Change text color to red on hover */
  background-color: white; /* Change background to white on hover */
  border-color:#ffa726; /* Change border color to red on hover */
}

/* Hover effect for the 'Subscribe Newsletter' text */
.subscribe-text {
  color: white;
  transition: color 0.3s; /* Smooth transition */
}

.subscribe-text:hover {
  color: #ffa726 !important; /* Change text color to red on hover */
}



/*underline section*/
/* Underline section */
/* Underline effect for all nav-links with the same width as text */
.navMenu {
    position: relative;
    display: inline-block; /* Ensures the underline matches text width */
}

.navMenu::after {
    content: "";
    position: absolute;
    width: 0; /* Initially set the width to 0 */
    height: 4px;
    background-color: #f89f1d; /* Change to your preferred underline color */
    bottom: -2px;
    left: 50%; /* Start from the center */
    transform: translateX(-50%); /* Center the underline */
    transition: width 0.3s;
}

.navMenu:hover::after {
    width: 50%; /* Expand underline to match text width on hover */
}

/* Change color on hover */
.navMenu:hover {
    color: #b91e22; /* Change to your preferred hover color */
}

/* Media query to remove underline effect on mobile view */
@media (max-width: 768px) {
    .navMenu::after {
        display: none; /* Disable underline effect for smaller screens */
    }
}



    </style>
</head>
<body>
    
    
 <!-- Subscribe Newsletter Section -->
<div id="newsletterSection " class="container-fluid py-1 d-none d-sm-block bg-subscribe" style="background-color:#194369; background-repeat:no-repeat; background-position: center; background-size: cover;">
  <div class="d-flex flex-sm-row flex-column  justify-content-between align-items-center" style="    margin-left: 212px;">
    <p class="text-white me-sm-3 me-0 subscribe-text mb-2 mb-sm-0" >
      <i class="fa-regular fa-envelope"  style="font-size:15px;"></i> 
      info@edugst.com
    </p>
    <div class="mb-3 mb-sm-0"></div>
    <div class="d-flex flex-sm-row flex-column justify-content-between align-items-center" style="    margin-right: 180px;">
      <span class="text-white subscribe-text" style="margin-left: 20px;">
       Subscribe Newsletter
      </span>
      <button class="btn btn-outline-light rounded-pill ms-3 btn-sm  subscribe-btn" data-bs-toggle="modal" data-bs-target="#SubscribeModal">Subscribe</button>
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
            
             <form method="post" action="<?php echo htmlspecialchars(stripslashes('subscribe_add.php')); ?>" id="SubscribeModal">
                                
                                
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
                    

                    <button type="submit" name="submit" class="btn btn-primary">Subscribe</button>
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
            alert('Thank you for newsletter!');
       },500)
    });
</script>







<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light  color     py-1" id="StickyNav" style=" background-color:white; background-repeat:no-repeat; 
margin-left:margin-left: 171px; background-size: cover;"  
  <div class="container-xl">
   <div class="d-flex logo1" style="margin-left: 225px;">
        <!-- Logo -->
    <a class="navbar-brand" href="index">
      <img src="asset/images/edulogo.jpg" alt="edugst" style=" width:165px;">
    </a>
   </div>
    <!-- Navbar toggle -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapse -->
    <div class="collapse navbar-collapse nav-menu me-2" id="navbarCollapse">
      <!-- Nav -->
      <div class="navbar-nav mx-lg-auto">
        <a class="nav-link active px-3 navMenu" aria-current="page" href="index">Home</a>
        <a class="nav-link px-3 navMenu" href="about">About Us</a>
        <a class="nav-link px-3 navMenu" href="course">Courses</a>
        <a class="nav-link px-3 navMenu" href="webinar">Webinar</a>
        <div class="nav-item dropdown me-2 navMenu ">
          <a class="nav-link dropdown-toggle  px-3" href="#" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resources
          </a>
          <ul class="dropdown-menu   " aria-labelledby="resourcesDropdown">
            <li><a class="dropdown-item nav-link " href="Academy's_Newsletter">Academy's Newsletter</a></li>
            <li><a class="dropdown-item nav-link" href="publication">Publication</a></li>
            <li><a class="dropdown-item nav-link" href="important_links">Important Links</a></li>
            <li><a class="dropdown-item nav-link" href="glossary">Glossary</a></li>
          </ul>
        </div>
        <a class="nav-link px-3 navMenu" href="blog">Blog</a>
        <div class="nav-item dropdown me-2 navMenu">
          <a class="nav-link dropdown-toggle  px-3" href="#" id="mediaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Media
          </a>
          <ul class="dropdown-menu" aria-labelledby="mediaDropdown">
            <li><a class="dropdown-item nav-link" href="media">Media</a></li>
            <li><a class="dropdown-item nav-link" href="videos">Videos</a></li>
          </ul>
        </div>
        <a class="nav-link px-3 me-2 navMenu" href="contactus">Contact Us</a>
      </div>
    </div>
  </div>
</nav>




    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqABP7gMsmqHXXdBm7LtTLJ3zG7kppeu6xq8Ptyo0aFsc9a7mM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGFxL2FKzt1rE9xNlwFf5xEJ0URy0wYduRF0zYdCFyI3" crossorigin="anonymous"></script>
    
     <script>
    window.addEventListener('scroll', function() {
        var blueLine = document.getElementById('StickyNav');
        if (window.scrollY > 0) {
          document.getElementById('StickyNav').classList.add('fixed-top');
        } else {
            document.getElementById('StickyNav').classList.remove('fixed-top');
        }
    });
</script>
</body>

</html>
