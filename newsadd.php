
<section class="mt-5 d-none d-sm-block">
  <div class="d-flex flew-row position-relative">
    <div class="position-absolute bottom-0" style="width: 50%; height: 110px; z-index:2;" id="red">
      <div class="textClass3">
        <img src="asset/images/nl.svg" class="fs">
        <h2 class="text-uppercase fw-semibold ms-2" style="margin-left: 216px;"> Our<br>Newsletter</h2>
      </div>
    </div>

    <div class="bg-warning position-absolute bottom-0 start-50 end-0" style="width: 51.5%; height: 69px; margin-left: -25px; z-index:1;" id="green">
      <div class="textfooter">
        <div class="special-right d-flex justify-content-center align-items-center p-3" style="margin-left: 95px; width: 517px;     margin-top: 11px;">
            
         <form method="post" class="input-group" action="<?php echo htmlspecialchars(stripslashes('newssletter.php')); ?>" id="news">
             
                     
         <input type="email" name="email" class="form-control" placeholder="Enter your e-mail address" aria-label="Email Address"  required>
            <button class="btn btn-danger"  name="submit" type="submit"><i class="fa-solid fa-paper-plane"></i> </button>
          </form>
        </div>
        <div class="d-flex flex-row align-items-center"></div>
      </div>
    </div>
  </div>
</section>


