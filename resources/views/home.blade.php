<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>We have a solution to your housing issues.</title>
    <link rel = "icon" type = "image/x-icon" href = "{{URL::asset('img/logo_for_now_4.ico')}}"
    <!-- Bootstrap core CSS -->

    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/agency.css')}}" rel="stylesheet">
    <link href= "{{URL::asset('css/footer.css')}}" rel = "stylesheet">

    <style>
     .my-link:hover{
        color: white !important; 
        font-weight: bold; 
      }

      .my-bookin  g-button:hover{
        color: white !important; 
        background-color: transparent !important; 
        font-weight: bold; 
      }

    .img-icon{
        padding: 0px;
        height: 150px;
        background-color: yellow;
        border-radius: 30%;  
        float: none; 
        }
       
       header.masthead .intro-text {
        padding-top: 230px !important;
      }
      
      #typewriter{
        display: inline; 
      }

      .typed-cursor
      {
       font-size: 40px;
       color: #fed136; 
       -moz-animation: blink 0.7s infinite;
      animation: blink 0.7s infinite;
      }
      #strong{
        color: #fed136;
      }

      /* Don't judge if you're reading this later on, I'm a back end dev, not a front end
         So just don't mind the media element here with the important key tags
      */

      
    @media (max-width: 350px) {
      .masthead .btn[style]
      {
        margin: 5px !important;
        width: 280px !important; 
      }
    }


</style>
  </head>
  <!--Start of Tawk.to Script-->
<script type="text/javascript" src ="{{URL::asset('js/tawkchat.js')}}">
</script>
<!--End of Tawk.to Script-->
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="{{URL::asset('img/logo_for_now_4.png')}}" width="37" height="37" class="d-inline-block align-top brand-image" alt="">
            Able Craftsmen
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
           <li  class = "nav-item num-li" style = "margin-right: 50px;">
              <a class = "nav-link my-link rounded btn-primary" href = "tel:+2347037699184"  id = "phone-num-link" >
                <i class = "fa fa-whatsapp"></i>
                <i class = "fa fa-phone"></i>
               <span class= "text-uppercase"> C</span><span class = "text-lowercase">ontact: +234 7037 699 184</span> 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#artisans">Our Artisans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#howitworks">How It Works?</a>
            </li>
           
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div  class="intro-text">
          <div id ="typewriter"   class="intro-lead-in">....</div>
          <div style = "padding-top: 20px;" class="intro-lead-in">We have an Artisan For You</div>
          <a style = "font-weight: normal; margin: 5px; padding: 10px; width: 300px;" data-toggle="modal" class="btn btn-primary btn-xl js-scroll-trigger my-booking-button" data-target="#bookArtisan">Book An Able Craftsman</a>
          <a style = "font-weight: normal; background-color: transparent; margin: 5px; width: 300px; padding: 10px;  " data-toggle = "modal" class="btn btn-primary btn-xl js-scroll-trigger" data-target = "#become-An-Artisan">Become An Able Craftsman</a>
       </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">We offer various services to suit your needs.</h3>
          </div>
        </div>
      

        <div class = "row" style = "height: auto;">
            <div class = "col-md-4 text-center" style = "background-color: white;" >
                <img class = "img-rounded text-center img-icon" style ="background-color: #fed136;" src = "img/carpenter2.png">
                <h4 class="service-heading">Carpentry</h4>
                <p class="text-muted">Need a door, drawer, cabinet, bed or chair repaired? Or a lock replaced? Or do you have a leaky roof or any other Carpentry related issues? We have the right artisan for you. </p>        
            </div>
            <div class = "col-md-4 text-center">
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/electrical.png">
                <h4 class="service-heading">Electrical</h4>
                <p class="text-muted">What general electrical issues do you have? Do you have issues with your plugs or is it with your prepaid meter? We have the right artisan for you.</p>        
            </div>
            <div class = "col-md-4 text-center"> 
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/plumbing.png">
                <h4 class="service-heading">Plumbing</h4>
                <p class="text-muted">Do you have a leaking tap, faucet or water pipe? Reach out to us, we can provide an artisan with solutions. </p>        
            </div>
        </div>

        <div class = "row" style = "height: auto; margin-top: 40px;">
            <div class = "col-md-4 text-center" >
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/ac_repairer.png">
                <h4 class="service-heading">AC servicing</h4>
                <p class="text-muted">Contact us for your home or car air-conditioning needs. </p>        
            </div>
            <div class = "col-md-4 text-center">
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/mechanic.png">
                <h4 class="service-heading">Mechanical</h4>
                <p class="text-muted">Do you need repairs done to your cars,motocycles or generators? </p>        
            </div>
            <div class = "col-md-4 text-center"> 
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/brick_laying.png">
                <h4 class="service-heading">Brick Laying</h4>
                <p class="text-muted">Need a block wall raised or concrete poured? Search no more, we have the right artisans just for you. </p>        
            </div>
        </div>
        
        <div clas = "row" style = "height: auto; margin-top: 10px;">
          <h2 class= "section-subheading text-center" style = "font-weight: bold; ">Your required service isn't listed? </h2>
          <h3 class = "section-subheading text-center" style= "margin-bottom: 30px; "> No worries! Make a Request and we will contact you within minutes.</h3>
          <div class = "d-flex justify-content-center">
             <a style = "font-weight: normal; color: black; background-color: transparent; width: 300px; padding: 10px;" data-toggle="modal" class="btn btn-primary btn-xl  my-booking-button center" data-target="#bookArtisan">Book An Able Craftsman</a>
          </div>
        </div>
      </div>
    </section>

        <!-- Our Artisans -->
    <section id="artisans">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Artisans</h2>
            <h3 class="section-subheading text-muted">We have various <b>qualified artisans</b> from many fields.</h3>
          </div>
        </div>
      

        <div class = "row" style = "height: auto;">
            <div class = "col-md-4 text-center" style = "background-color: white;" >
                <img class = "img-rounded text-center img-icon" style ="background-color: #fed136;" src = "img/carp.png">
                <h5 class="service-heading">Carpenters</h5>
                <!-- <p class="text-muted">Need a door, drawer, cabinet, bed or chair repaired? Or a lock replaced? Or do you have a leaky roof or any other Carpentry related issues? We have the right artisan for you. </p>         -->
            </div>
            <div class = "col-md-4 text-center">
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/electrician.png">
                <h5 class="service-heading">Electricians</h5>
                <!-- <p class="text-muted">What general electrical issues do you have? Do you have issues with your plugs or is it with your prepaid meter? We have the right artisan for you.</p>         -->
            </div>
            <div class = "col-md-4 text-center"> 
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/plumber.png">
                <h5 class="service-heading">Plumbers</h5>
                <!-- <p class="text-muted">Do you have a leaking tap, faucet or water pipe? Reach out to us, we can provide an artisan with solutions. </p>         -->
            </div>
        </div>

        <div class = "row" style = "height: auto; margin-top: 50px;">
            <div class = "col-md-4 text-center" >
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/painter.png">
                <h4 class="service-heading">Painters</h4>
                <!-- <p class="text-muted">Contact us for your home or car air-conditioning needs. </p>         -->
            </div>
            <div class = "col-md-4 text-center">
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/welder.png">
                <h5 class="service-heading">Mechanics</h5>
                <!-- <p class="text-muted">Do you need repairs done to your cars,motocycles or generators? </p>         -->
            </div>
            <div class = "col-md-4 text-center"> 
                <img class = "img-rounded img-icon" style ="background-color: #fed136;" src = "img/bricklayer.png">
                <h5 class="service-heading">Brick Layers</h5>
                <!-- <p class="text-muted">Need a block wall raised or concrete poured? Search no more, we have the right artisans just for you. </p>         -->
            </div>
        </div>
        
        <div clas = "row clear-fix" style = "height: auto; margin-top: 50px; mx-auto">
          <h2 class= "section-subheading text-center" style = " ">Are you a qualified artisan? </h2>
          <h3 class = "section-subheading text-center" style= "margin-bottom: 30px; "> Feel free to register or suggest a qualified artisan.</h3>
          <div class = "d-flex justify-content-center">
           <a style = "font-weight: normal; color: black; width: 300px; padding: 10px;" data-toggle="modal" class="btn btn-primary btn-xl  my-booking-button align-middle " data-target="#become-An-Artisan">Become An Able Craftsman</a>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section id="howitworks">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">How It Works</h2>
            <h3 class="section-subheading text-muted">We operate with a model aimed at satisfying you.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid"  src="img/about/broken_pipe.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Request An Artisan</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Your artisan is only a call away. Contact us with your problem and we will get back to you within minutes. </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/search.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Search For Artisan</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Our agents will link you up with a certified artisan near you within minutes.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/estimate.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Artisan Gives Estimate</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Upon arrival, our artisans will carry out a careful inspection of the work and provide you with an estimate of how much the job will cost. While the estimate is free, it is expected that our customers treat the artisans with the respect they deserve.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/payment.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Job Execution & Payment</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Once an agreement is reached, our artisans will complete the job. All material and transportation costs will be borne by the cutomer.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>


<footer class="footer-distributed" style = "background-color: black;">

<div class="footer-left">

  <h4 style = "color: white; "> Copyright &copy; AbleCraftsmen 2018</h4>
<!-- 
  <p class="footer-links">
    <a href="#">Home</a>
    ·
    <a href="#">Blog</a>
    ·
    <a href="#">Pricing</a>
    ·
    <a href="#">About</a>
    ·
    <a href="#">Faq</a>
    ·
    <a href="#">Contact</a>
  </p> -->

</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Recreation Avenue, Coporative Villa</span> Lagos, Nigeria</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+234 703 769 9184 </p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a style = "color: #fed136;" href="mailto:support@company.com">support@ablecraftsmen.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About AbleCraftsmen</span>
    We plan to provide you with the most reliable and professional artisans out there.
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <!-- <a href="#"><i class="fa fa-github"></i></a> -->

  </div>

</div>

</footer>
    

    <!-- Modal For Booking An Artisan -->
    <div class = "modal fade" id = "bookArtisan" role = "dialog" aria-hidden= "true" tablindex = "1">
        <div class= "modal-dialog">
          <div class = "modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                    <div class="rl"></div>
                  </div>
              </div>
              <div class = "modal-header" style = "background-color: black; color: white; ">
                  <span class = "mx-auto">Book An Artisan</span>
                  <div> 
                    <a href= "#" type = "button" style = "padding: 0; background-color: black; border-color: black; color:white;"   data-dismiss= "modal"> 
                       &times;
                    </a> 
                  </div> 
              </div>

              <div class = "modal-body">
                  <div class="container" >
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="bookingForm" novalidate>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input class="form-control" id="bookingName" type="text" placeholder="Emmanuel Adakole *" required data-validation-required-message = "Name  required">
                                  <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="form-group">
                                  <!-- <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">+234</span>
                                  </div> -->
                                  <input class="form-control" id="bookingPhone" type="text" placeholder="07037699184 *" pattern="^[0-9]{11}$"  data-validation-pattern-message="11 digits required" required data-validation-required-message="Mobile No Required.">
                                  <p class="help-block text-danger"></p>

                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <textarea style = "height: 90px;" class="form-control" id="bookingMessage" placeholder = "Please, Describe your problem here."></textarea>
                                  <p class="help-block text-danger"></p>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="bookingButton" class="btn btn-primary  btn-l text-uppercase" type="submit">SUBMIT</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
              </div>

              <div class = "modal-footer" style = "background-color: #fed136;">
                  <span class= " mx-auto">We will get back to you shortly. </span> 
                  <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button> -->
              </div>
        </div>
       </div>
    </div>

    <!-- Modal For Becoming An Able Craftsman -->
    <div class = "modal fade" id = "become-An-Artisan" role = "dialog" aria-hidden= "true" tablindex = "1">
        <div class= "modal-dialog">
          <div class = "modal-content">
              <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                    <div class="rl"></div>
                  </div>
              </div>
              <div class = "modal-header" style = "background-color: black; color: white; ">
                  <span class = "mx-auto">Become An Able Craftsman</span>
                  <div> 
                    <a href= "#" type = "button" style = "padding: 0; background-color: black; border-color: black; color:white;"   data-dismiss= "modal"> 
                       &times;
                    </a> 
                  </div> 
              </div>

              <div class = "modal-body">
                  <div class="container" >
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="regArtisanForm" name="registerArtisans" novalidate>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input class="form-control" id="artisanName" type="text" placeholder="Your Name *" required data-validation-required-message="Name Required">
                                  <p class="help-block text-danger"></p>
                                </div>
                                
                                <!-- <div class="form-group"> -->
                                  <!-- <div class="input-group-append">
                                      <span class="input-group-text" id="basic-addon2">+234</span>
                                  </div> -->
                                  <!-- <input class="form-control" id="artisanPhone" type="tel" placeholder="08023085960 *" pattern="^[0-9]{11}$"  data-validation-pattern-message="11 digits required"  required data-validation-required-message="Mobile No Required.">
                                  <p class="help-block text-danger"></p>
                                </div> -->
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">

                                  <input class="form-control" id="artisanPhone" type="tel" placeholder="08023085960 *" pattern="^[0-9]{11}$"  data-validation-pattern-message="11 digits required"  required data-validation-required-message="Mobile No Required.">
                                  <!-- <input  class="form-control" id="artisanAddress" placeholder = "Ajah *" required data-validation-required-message="City Required"/> -->
                                  <p class="help-block text-danger"></p>                                
                                </div>

                                <!-- <div class="form-group">
                                  <input class = "form-control" id = "artisanJobType" placeholder = "Job Type *" required data-validation-required-message = "Job Required"/>
                                  <p class="help-block text-danger"></p>
                                </div> -->
                              </div>
                              <div class="clearfix"></div>
                              <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="artisanRegButton" class="btn btn-primary  btn-l text-uppercase" type="submit">SUBMIT</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
              </div>

              <div class = "modal-footer" style = "background-color: #fed136;">
                  <span class= " mx-auto">We will get back to you shortly. </span> 
                  <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button> -->
              </div>
        </div>
       </div>
    </div>
   
      
    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>


    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/agency.min.js')}}"></script>

    <!-- For the booking -->
    <script src = "{{URL::asset('js/booking.js')}}"></script>

    
    <!-- Validation with JavaScript -->
    <script src="{{URL::asset('js/jqBootstrapValidation.js')}}"></script>

    <script src = "{{URL::asset('js/regArtisan.js')}}"></script>

    <!-- Script for the type writer animation  -->
	  <script src = "{{URL::asset('js/typed.min.js')}}" type = "text/javascript"></script>    
    <script>
      var typed3 = new Typed('#typewriter', {
					strings: ["Do you need your <strong style = 'color: #fed136;'>AC repaired?<strong>", "Your AC needs <strong style = 'color: #fed136;'>Servicing</strong>", "You have a <strong style = 'color: #fed136;'>Pipe Leakage</strong>", "Your house needs<strong style = 'color: #fed136;'> Re-Painting</strong>"],
					typeSpeed: 200,
					backSpeed: 0,
					smartBackspace: true, // this is a default
					loop: true
				});
    </script>

    <script type = "text/javascript">
      $("#bookingForm").on("shown.bs.modal", function(){
        //reset the forms
        alert("fuck  yo all");
        $('#bookingForm').trigger("reset"); 
      })

       $("#regArtisanForm").on("shown.bs.modal", function(){
        //reset the forms
        alert("fuck  yo all");
        $('#bookingForm').trigger("reset"); 
      })

    </script>
  </body>
</html>
