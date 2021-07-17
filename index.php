<?php
 include("assests/header.php");
 ?>

   <!-- nav bar -->
   <?php 
    include("assests/navbar.php");
     ?>
   <!-- end nav bar -->

   <!-- hero wrap -->
<div class="jumbotron hero_wrap d-flex px-0 justify-content-center mb-0 rev-con">
	<div class="head_text_con">
<h1 class="hero_head text-center text-white mont mt-2">LEADERS IN QUALITY
CONSTRUCTION AND
INFRASTRUCTURE</h1>

<a href="#services" class="hero_icon text-center d-block">
<span class="material-icons hero_arrow">
keyboard_arrow_down
</span>
</a>
</div>
</div>

   <!-- end hero wrap -->

  <!-- start service section -->
  <div class="service_wrap jumbotron mb-0 pb-0" id="services">
    <div class="rev-con">
       <h1 class="text-center pop">SERVICES</h1>
       <hr class="un_hr">
     <div class="d-flex justify-content-center mt-4">
      <div class="service_grid row mt-4">
        <div class="col-md-4 mb-4">
          <div class="media flex-column">
            <img src="img/service-1.png" class="w-100" alt="">
            <div class="media-body bg-light p-4">
            <h4 class="my-3">Preconstruction <br> Planning</h4> <p>
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
            </p> 
            </div>

          </div>
        </div>
        <div class="col-md-4 mb-4">
           <div class="media flex-column">
            <img src="img/service-2.jpg" class="w-100" alt="">
            <div class="media-body bg-light p-4">
            <h4 class="my-3">Preconstruction <br> Planning</h4> <p>
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
            </p> 
            </div>

          </div>
        </div>
        <div class="col-md-4">
           <div class="media flex-column">
            <img src="img/service-3.png" class="w-100" alt="">
            <div class="media-body bg-light p-4">
            <h4 class="my-3">Preconstruction <br> Planning</h4> <p>
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.
            </p> 
            </div>

          </div>
        </div>
      </div>
    </div>

    </div>
  </div>

   <!-- end service section -->

      <!-- About us -->
  <div class="jumbotron mb-0 w-100 px-0 py-0 about_wrap mt-5" id="about">
    <div class="row w-100 px-0 mx-0">
      <div class="col-md-1"></div>
      <div class="col-md-6 py-5 px-4 px-sm-5">
        <h1 class="pop">ABOUT</h1>
        <hr class="un_hr" align="left">
          <p class="mt-5 pr-sm-5">
      
I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.​This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.  <br>
<a href="http://localhost/2021wps/v2cement/about.php" class="text-danger d-block float-right mt-4">Read More</a>
    </p>
      </div>
      <div class="col-md-5 about_right px-0 mx-0"></div>
    </div>
  </div>

   <!-- end about us -->

   <!-- our products -->

   <div class="jumbotron product_wrap mb-0" id="products">
     <div>
       <h1 class="text-center pop">PRODUCTS</h1>
       <hr class="un_hr">

       <!-- carousel -->
      <div id="product_slide" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#product_slide" data-slide-to="0" class="active"></li>
    <li data-target="#product_slide" data-slide-to="1"></li>
    <li data-target="#product_slide" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner py-5 mb-5 mt-1">

    <div class="carousel-item active">
      <div class="w-100 d-flex justify-content-center product_box">
        <a href="http://localhost/2021wps/v2cement/product_detail.php?product=cementbag">
      <img src="img/product-2.jpeg" alt="Los Angeles">
    </a>
    </div>
    </div>
    

    <div class="carousel-item">

      <div class="w-100 d-flex justify-content-center product_box">
        <a href="http://localhost/2021wps/v2cement/product_detail.php?product=portland">
      <img src="img/product-3.jpeg" alt="Los Angeles">
      </a>
    </div>

    </div>
    <div class="carousel-item">

      <div class="w-100 d-flex justify-content-center product_box">
        <a href="http://localhost/2021wps/v2cement/product_detail.php?product=supremo">
      <img src="img/product-4.jpeg" alt="Los Angeles">
    </a>

    </div>

    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#product_slide" data-slide="prev">
    <span class="material-icons carousel_prev">
     arrow_back_ios
    </span>

  </a>
  <a class="carousel-control-next" href="#product_slide" data-slide="next">
     <span class="material-icons carousel_next">
    arrow_forward_ios
     </span>

  </a>

</div>

       <!-- end carousel -->
     </div>
   </div>

   <!-- end our products -->

   <!-- projects section -->

    <!-- counter -->
    <div class="jumbotron counter_wrap d-flex justify-content-center rounded-0 mont mb-0">
      <div class="row counter_box w-75 text-center">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6 count_item">
              <h1>2023</h1>
              <h4>Year <br> Established</h4>
              <hr class="bg-white side_hr">
            </div>
            <div class="col-sm-6 count_item">
              <h1>205</h1>
              <h4>Products <br> Completed</h4>
              <hr class="bg-white side_hr">
            </div>
          </div>
        </div>
        <div class="col-md-6">
              <div class="row">
            <div class="col-sm-6 count_item">
              <h1>870</h1>
              <h4>Contractors <br> Appointed</h4>
              <hr class="bg-white side_hr">
            </div>
            <div class="col-sm-6 count_item">
              <h1>15</h1>
              <h4>Awards <br> won</h4>
              <hr class="bg-white side_hr">
            </div>
          </div>
        </div>
      </div>
    </div>

   <!-- end projects section -->

   <!-- clients section -->

   <div class="jumbotron mb-0 border-bottom border-dark rounded-0 client_wrap">
    <div>
    <h1 class="text-center pop">CLIENTS</h1>
    <hr class="un_hr">

    <div class="d-flex justify-content-center">
  <div class="slide_img_con">
    <img class="item mx-1" src="img/client-1.png">
    <img class="item mx-1" src="img/client-2.png">
    <img class="item mx-1" src="img/client-3.png">
    <img class="item mx-1" src="img/client-4.png">
    <img class="item mx-1" src="img/client-5.png">
  </div>
</div>

    </div>
   </div>

   <!-- end clients section -->

   <!-- contact wrap -->
   <div class="jumbotron mb-0 contact_wrap rounded-0 pb-0" id="contact">
   	<h1 class="text-center pop">CONTACT</h1>
   	<hr class="un_hr">

   	<div class="map_con py-5 d-flex justify-content-center align-items-center flex-column">
   		<div class="res-w">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.9452281221775!2d85.13871861449275!3d25.60673622124799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed585d9028527f%3A0x8c543528e08526ce!2sHari%20Niwas%20Complex%2C%20Exhibition%20Rd%2C%20Budh%20Vihar%2C%20Fraser%20Road%20Area%2C%20Patna%2C%20Bihar%20800001!5e0!3m2!1sen!2sin!4v1624941647494!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   		</div>

   		<div class="res-w row mont">
   			<div class="col-md-5">

   				<h4 class="my-5">Inquiries</h4>
   				<p class="mb-5">For any inquiries, questions or commendations, please call: <br> +91 79036 18074 or fill out the following form</p>

   			<h4 class="mb-4">Contact Us</h4>
   			<form id="contact_form">

   		<div class="form-group my-1">
   		   <label for="">Full Name <font color="red">*</font></label>
   		   <input type="text" name="fullname" required class="form-control">
   		</div>

   		<div class="form-group my-1">
   		   <label for="">Email <font color="red">*</font></label>
   		   <input type="email" name="email" required class="form-control">
   		</div>

   		<div class="form-group my-1">
   		   <label for="">Subject <font color="red">*</font></label>
   		   <input type="text" name="subject" required class="form-control">
   		</div>

   		<div class="form-group my-1">
   		   <label for="">Message</label>
   		   <textarea name="message" cols="30" class="form-control" rows="5"></textarea>
   		</div>

   		<div class="form-group mt-3">
   			<button class="btn float-right btn-danger px-5" type="submit">Submit</button>
   		</div>

   			</form>	

   			</div>
   		<div class="col-md-1"></div>	

   			<div class="col-md-6">
   				<h4 class="my-5">V2 Cement Office Bihar</h4>
                <address class="mb-4">Indian Machinery Campur,
                <br>	
                 Hari Niwas, India</address>
                  <br>
                <p class="mb-5">contact@v2cement.com
                <br>	
                 Tel: 1800 123 2521

                <h4 class="mt-5 mb-4">Employment</h4>
                <p>To apply for a job with Sphere Constuctions, <br> please send a cover letter together with your <br> C.V. to: contact@v2cement.com</p> 
                <br class="d-none d-sm-block">
                <br class="d-none d-sm-block">
                <br class="d-none d-sm-block">
                <hr class="un_hr_footer mb-4 mt-5" align="left">
                <h4>Get a quote : 1800 123 2521</h4>

   			</div>

   		</div>
   	</div>

   </div>

   <!-- end contact wrap -->

   <i class="fa fa-arrow-circle-up scrollToTop rounded-circle" aria-hidden="true"></i>

 <?php
   include("assests/footer.php");
  ?>