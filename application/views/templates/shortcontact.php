 <!-- Start Talk Area -->
 <div class="talk-area ptb-100">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 col-md-12">
                 <div class="talk-image" data-tilt>
                     <img src="<?=base_url();?>/assets/images/talk/talk-2.png" alt="image">

                     <div class="talk-circle">
                         <img src="<?=base_url();?>/assets/images/talk/talk-circle.png" alt="image">
                     </div>
                 </div>
             </div>

             <div class="col-lg-6 col-md-12">
                 <div class="talk-content margin-zero">
                     <span>LET'S TALK</span>
                     <h3>We Would Like To Hear From You Any Question <span class="overlay"></span></h3>
                     <p>Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt
                         ut labore.</p>

                     <form id="contactFormTwo">
                         <div class="row">
                             <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                     <input type="text" name="name" class="form-control" required
                                         data-error="Please enter your name" placeholder="Your name">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>

                             <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                     <input type="email" name="email" class="form-control" required
                                         data-error="Please enter your email" placeholder="Your email address">
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>

                             <div class="col-lg-12 col-md-12">
                                 <div class="form-group">
                                     <textarea name="message" class="form-control" cols="30" rows="6" required
                                         data-error="Please enter your message"
                                         placeholder="Write your message..."></textarea>
                                     <div class="help-block with-errors"></div>
                                 </div>
                             </div>

                             <div class="col-lg-12 col-md-12">
                                 <button type="submit" class="default-btn">Send Message<span></span></button>
                                 <div id="msgSubmitTwo" class="h3 text-center hidden"></div>
                                 <div class="clearfix"></div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Talk Area -->

 <!-- Start Overview Area -->
 <div class="overview-area pt-100 pb-75">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-3 col-md-6">
                 <div class="overview-card">
                     <h3>Call Us</h3>
                     <span>
                         <a href="tel:9901234567">+91-90511-35603</a>
                     </span>

                     <div class="overview-shape">
                         <img src="<?=base_url();?>/assets/images/overview/overview-shape.png" alt="image">
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="overview-card">
                     <h3>Email Us</h3>
                     <span>
                         <div id="protected-email"></div>
                     </span>

                     <div class="overview-shape">
                         <img src="<?=base_url();?>/assets/images/overview/overview-shape.png" alt="image">
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="overview-card">
                     <h3>Tech Support</h3>
                     <span>
                         <a href="tel:15143125678">+91-90511-35603</a>
                     </span>

                     <div class="overview-shape">
                         <img src="<?=base_url();?>/assets/images/overview/overview-shape.png" alt="image">
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="overview-card">
                     <h3>Visit Us</h3>
                     <span>EN Building, Sector V, WB 700091, IN</span>

                     <div class="overview-shape">
                         <img src="<?=base_url();?>/assets/images/overview/overview-shape.png" alt="image">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Overview Area -->
 <script type="text/javascript">
function generateEmail() {
    var name = "info"; // Replace with the desired email username (e.g., "info", "contact", etc.)
    var domain = window.location.hostname; // Replace with your domain name (e.g., "example.com")
    document.getElementById("protected-email").innerHTML = '<a href="mailto:' + name + '@' + domain + '">' + name +
        '@' + domain + '</a>';
}

// Call the function to generate the email address when the page loads
window.onload = generateEmail;
 </script>