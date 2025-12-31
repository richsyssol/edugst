<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer 2 EduGST</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="asset/css/style.css">
    

    <style>
        .footer-logo {
            /*font-size: 2.5rem;*/
            /*margin-left: -960px;*/
            /*height:100px;*/
            /*font-weight: bold;*/
            /*background: linear-gradient(90deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);*/
            /*-webkit-background-clip: text;*/
            /*-webkit-text-fill-color: transparent;*/
            /*  max-width: 100%;*/
              /*width: 12%;*/
}

        .footer-title {
            font-weight: bold;
            text-transform: uppercase;
            /*margin-bottom: 20px;*/
            position: relative;
        }
        .footer-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 2px;
            background-color: #fbb034;
            margin-top: 5px;
        }
    
        .footer-contact-info i {
            color: #fbb034;
            margin-right: 10px;
        }
        .footer-gallery img {
            height: 80px;
            width: 80px;
            object-fit: cover;
            margin: 5px;
        }
        
        
 
        .fa-solid, .fa-brands, .fa-regular {
  font-size: 20px;
 
  padding: 5px 0;
  width: 40px;
 
}


    </style>
     
    
</head>
<body>

<section class="footer py-3" style="background-color: #000000!important; color: #ffffff;">   
    <div class="container ">
        <!-- Logo Section -->
       
<div class="text-start mb-5 ">
  <img src="asset/images/ef.png" alt="Logo" style=" width:200px; "  class="footer-logo mb-4">
</div>
        <div class="footer-hr" style="margin-top: -57px;">
            <hr>
        </div>
        
        <div class="row ">
            <!-- About Us Section -->
            <div class="col-md-5 my-3 my-sm-0 ">
                <h5 class="footer-title mb-4 inter" >About Us</h5>
                <small class="text-white-50" style="text-align: justify;">Edu-GST offers a unique and highly engaging way to learn vital GST-related concepts with the goal of enriching individuals and professionals or businesses with dynamic and immersive learning experiences.</small>
            </div>

            <!-- Newsletter Section -->
            <!--<div class="col-md-6 my-3 my-sm-0">-->
            <!--    <h5 class="footer-title mb-4 inter">Subscribe Newsletter</h5>-->
            <!--    <form>-->
            <!--        <div class="mb-3">-->
            <!--            <input type="email" class="form-control" placeholder="Email Address" required>-->
            <!--        </div>-->
            <!--        <button type="submit" class="btn btn-danger footer-btn">Subscribe</button>-->
            <!--    </form>-->
            <!--</div>-->
<!--            <div class="col-md-7 my-3 my-sm-0">-->
<!--    <h5 class="footer-title mb-4 inter">NEWSLETTER</h5>-->
<!--<div class="row"> -->
<!--               <form class="row"> -->
<!--        <div class="col-12 col-sm-8 mb-2">-->
<!--      <input type="email" class="form-control" id="newsletter" name="email" id="email" placeholder="Email Address" required>-->
<!--        </div>-->
<!--        <div class="col-12 col-sm-4">-->
<!--            <button type="submit" name="submit" class="btn btn-danger footer-btn" style="border-radius: 0;">Thank You</button>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->
<!-- </div>-->
 
 <!-- Newsletter Form -->
<div class="col-md-7 my-3 my-sm-0">
    <h5 class="footer-title mb-4 inter">NEWSLETTER</h5>
    <div class="row"> 
        <form class="row" id="newsletterForm">
            <div class="col-12 col-sm-8 mb-2">
                <input type="email" class="form-control" id="newsletterEmail" name="email" placeholder="Email Address" required>
            </div>
            <div class="col-12 col-sm-4">
                <button type="submit" name="submit" class="btn btn-danger footer-btn" style="border-radius: 0;">Thank You</button>
            </div>
        </form>
    </div>
</div>

<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="thankYouModalLabel">Newsletter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="subscribe_add.php" id="thankYouModalForm">
                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="modalEmail" class="form-label text-dark">Email</label>
                        <input type="email" class="form-control" id="modalEmail" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label text-dark">Contact Number</label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter your contact number" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to handle form submission and show modal -->
<script>
    $(document).ready(function(){
        // Handle the Newsletter Form submission
        $('#newsletterForm').on('submit', function(event){
            event.preventDefault(); // Prevent form from submitting normally
            var email = $('#newsletterEmail').val(); // Get the entered email

            // Auto-fill email in the modal
            $('#modalEmail').val(email);

            // Show the modal
            $('#thankYouModal').modal('show');
        });

        // Handle the Thank You Form submission inside the modal
        $('#thankYouModalForm').on('submit', function(event){
            // Allow the form to submit to the server by not preventing the default behavior.
        });
    });
</script>


 
 
 
 
 
 
 
     <!--header-line-->


<br>    
        <div class="row pt-3">
            <!-- Get in Touch Section -->
            <div class="col-md-5 my-3 my-sm-0 ">
                <h5 class="footer-title mb-4 inter" >Get In Touch</h5>
        <ul class="list-unstyled footer-contact-us">
            <li class="mb-3 d-flex align-items-center">
                <i class="fa fa-map-marker  fs-5 me-3 text-white-50"></i>
                <small class="text-white-50" style="text-align:justify;">Edu-GST<br>
Matruchaya Banglow, Plot No 16 and 17, Trambakeshwar Rd, behind Vikas Colony, Radha Nagari, Satya Colony, Parijat Nagar, Nashik, Maharashtra 422007</small>
            </li>
            <li class="mb-3 d-flex align-items-center">
                <i class="fa fa-phone me-3 text-white-50"></i>
                <small class="text-white-50">+91 9922159279 / +91 9822099980</small>
            </li>
            <li class="d-flex align-items-center" style="    margin-left: -20px;">
                <i class="fa fa-envelope me-3 text-white-50 "></i>
                <small class="text-white-50">info@edugst.com</small>
            </li>
        </ul>



            </div>

            <!-- Flickr Gallery Section -->
            <div class="col-md-7 my-3 my-sm-0 ">
               
                     <h5 class="footer-title mb-4 inter" >Our Flickr</h5>
                <div class="footer-gallery d-flex flex-wrap">
                    <img src="asset/images/dipakjoshi1.jpeg" alt="Gallery Image 1">
                    <img src="asset/images/dipakjoshi2.jpeg" alt="Gallery Image 2">
                    <img src="asset/images/dipakjoshi3.jpeg" alt="Gallery Image 3">
                    <img src="asset/images/dipakjoshi9.jpeg" alt="Gallery Image 4">
                    <img src="asset/images/dipakjoshi5.jpeg" alt="Gallery Image 5">
                    <img src="asset/images/dipakjoshi6.jpeg" alt="Gallery Image 6">
                              <img src="asset/images/dipakjoshi7.jpeg" alt="Gallery Image 6">
                              
                </div>
            </div>
        </div>

        <div style="margin-top: -26px;">
            <hr class="bg-white">
        </div>

        <!-- Left Side - 4 columns for Home, About, Webinar, and Event -->
        <div class="row py-2 ">
    <!-- Left Side - Social Icons -->
<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start my-3 my-sm-0">
    <div class="d-flex">
        <a href="https://www.facebook.com/edugst/" class="text-white-50 footer-icon mx-1">
            <i class="fab fa-facebook-f fs-6"></i>
        </a>
        <a href="https://www.instagram.com/_edu_gst_/" class="text-white-50 footer-icon mx-1">
            <i class="fab fa-instagram fs-5"></i>
        </a>
        <a href="https://www.youtube.com/@edu-gst2716" class="text-white-50 footer-icon mx-1">
            <i class="fab fa-youtube fs-5"></i>
        </a>
        <a href="https://wa.me/9922159279" class="text-white-50 footer-icon mx-1">
            <i class="fab fa-whatsapp fs-5"></i>
        </a>
        <a href="https://www.linkedin.com/company/edu-gst/" class="text-white-50 footer-icon mx-1" >
            <i class="fab fa-linkedin fs-5"></i>
        </a>
    </div>
</div>


    <!-- Right Side - Copyright Notice -->
    <div class="col-12 col-md-6 text-center text-md-end mt-3 mt-md-0">
        <p class="mb-0 text-white-50">
            &copy; 2024 Copyright :
            <a class="text-white-50" href="https://edugst.com/">edugst.com</a>
            All rights reserved.
        </p>
    </div>
</div>

        <!--<div class="row py-2">-->
        <!--    <div class="col-6 d-flex justify-content-start">-->
        <!--   <div>-->
        <!--            <a href="https://www.facebook.com/cmadipak.joshi?mibextid=ZbWKwL" class="text-white footer-icon"><i class="fab fa-facebook-f"></i></a>-->
        <!--            <a href="https://www.instagram.com/_edu_gst_/" class="text-white footer-icon"><i class="fab fa-instagram"></i></a>-->
        <!--            <a href="https://www.youtube.com/@edu-gst2716" class="text-white footer-icon"><i class="fab fa-youtube"></i></a>-->
        <!--            <a href="https://wa.me/9922159279" class="text-white footer-icon"><i class="fab fa-whatsapp"></i></a>-->
        <!--            <a href="https://www.linkedin.com/in/yourprofile" class="text-white footer-icon" target="_blank"><i class="fab fa-linkedin"></i></a>-->
        <!--        </div>-->
        <!--    </div>-->

            <!-- Right Side - Copyright Notice -->
        <!--    <div class="col-6 text-end">-->
        <!--        <p class="mb-0">&copy; 2024 Copyright : -->
        <!--            <a class="text-white" href="https://edugst.demovoting.com/">edugst.demovoting.com</a> -->
        <!--            All rights reserved.-->
        <!--        </p>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>






<section class="d-none d-sm-block">
  <div class="text2">
  </div>
<div class="float-sm">
    <div class="fl-fl float-gp d-flex align-items-center px-2"  style=" color: #fff; margin-left: 8px;" >
        <i class="fa-regular fa-bell ms-1"></i>
        <a href="#" data-bs-toggle="modal" data-bs-target="#subscriptionModal" >Subscription</a>
    </div>
</div>
<div class="fl-fl float-rs d-flex align-items-center px-2" style=" color: #fff; margin-left: 8px; " >
  <i class="fa-solid fa-file-circle-question ms-1"></i>
  <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
</div>


    
    <div class="fl-fl float-ig d-flex align-items-center px-2" style=" color: #fff; margin-left: 8px;" >
      <i class="fa-brands fa-whatsapp ms-1"></i>
          <a href="https://wa.me/9922159279">Whatsapp</a>
    </div>
  </div>
</section>


<!--subscription now-->

<div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subscriptionModalLabel">Subscription Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
     <form method="post" action="<?php echo htmlspecialchars(stripslashes('subscription.php')); ?>" id="subscriptionModal">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"   placeholder="Enter your email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" pattern="[789][0-9]{9}" required>
                    </div>
                    <!--<div class="mb-3">-->
                    <!--    <label for="address" class="form-label">Address</label>-->
                    <!--    <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter your message" required></textarea>-->
                    <!--</div>-->
                    <div class="modal-footer">
                     <button type="submit" name="submit" value="submit"  class="btn btn-primary">Submit</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>



  
          
          
             
   <!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">ENQUIRY FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                      <form method="post" action="<?php echo htmlspecialchars(stripslashes('enquiry.php')); ?>" id="enquiryModal">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your contact number" pattern="[789][0-9]{9}" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message"  name="message" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <button  type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>