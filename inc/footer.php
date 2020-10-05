<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">


              <div class="col-md-3 col-sm-6">
                <img src="img/logo.png" style="width: 50%;">
                <p style="color: #fff; padding-top: 15px;">Fashion is part of the daily air and it changes all the time, with all the events. You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes.</p>
              </div>



              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Useful Links</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="t-shirt.php">Mens Product</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="shirt.php">Services</a></li>
                      <li><a href="jeans.php">Discount</a></li>
                      <li><a href="index.php">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                     <p><span class="fa fa-home"></span>Fatma Complex Takia Azamgarh, Uttar Pradesh 272001 </p>
                      <p><span class="fa fa-phone"></span>+ 9565288090</p>
                      <p><span class="fa fa-envelope"></span>Email: umarshaikh2351@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="https://www.facebook.com/pages/category/Shopping---Retail/Dt-Collection-takiya-Azamgarh-112678943828547/" target='_blank'><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-instagram"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area text-center">
            <p style="text-align: center;"> © DT Collection 2020 All rights reserved Design by:
            <a href="#">Teoser Infotech</a></p>
            <!-- <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div> -->
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>





 
  <!-- / footer -->

  <!-- Login Modal -->  
  <!-- <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div>
    </div>
  </div>   -->  

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 




<script>
hideChat(0);

$('#prime').click(function() {
 toggleFab();
});


//Toggle chat and links
function toggleFab() {
 $('.prime').toggleClass('zmdi-comment-outline');
 $('.prime').toggleClass('zmdi-close');
 $('.prime').toggleClass('is-active');
 $('.prime').toggleClass('is-visible');
 $('#prime').toggleClass('is-float');
 $('.chat').toggleClass('is-visible');
 $('.fab').toggleClass('is-visible');

}

$('#chat_first_screen').click(function(e) {
 hideChat(1);
});

$('#chat_second_screen').click(function(e) {
 hideChat(2);
});

$('#chat_third_screen').click(function(e) {
 hideChat(3);
});

$('#chat_fourth_screen').click(function(e) {
 hideChat(4);
});

$('#chat_fullscreen_loader').click(function(e) {
 $('.fullscreen').toggleClass('zmdi-window-maximize');
 $('.fullscreen').toggleClass('zmdi-window-restore');
 $('.chat').toggleClass('chat_fullscreen');
 $('.fab').toggleClass('is-hide');
 $('.header_img').toggleClass('change_img');
 $('.img_container').toggleClass('change_img');
 $('.chat_header').toggleClass('chat_header2');
 $('.fab_field').toggleClass('fab_field2');
 $('.chat_converse').toggleClass('chat_converse2');
 //$('#chat_converse').css('display', 'none');
 // $('#chat_body').css('display', 'none');
 // $('#chat_form').css('display', 'none');
 // $('.chat_login').css('display', 'none');
 // $('#chat_fullscreen').css('display', 'block');
});

function hideChat(hide) {
 switch (hide) {
  case 0:
   $('#chat_converse').css('display', 'none');
   $('#chat_body').css('display', 'none');
   $('#chat_form').css('display', 'none');
   $('.chat_login').css('display', 'block');
   $('.chat_fullscreen_loader').css('display', 'none');
   $('#chat_fullscreen').css('display', 'none');
   break;
  case 1:
   $('#chat_converse').css('display', 'block');
   $('#chat_body').css('display', 'none');
   $('#chat_form').css('display', 'none');
   $('.chat_login').css('display', 'none');
   $('.chat_fullscreen_loader').css('display', 'block');
   break;
  case 2:
   $('#chat_converse').css('display', 'none');
   $('#chat_body').css('display', 'block');
   $('#chat_form').css('display', 'none');
   $('.chat_login').css('display', 'none');
   $('.chat_fullscreen_loader').css('display', 'block');
   break;
  case 3:
   $('#chat_converse').css('display', 'none');
   $('#chat_body').css('display', 'none');
   $('#chat_form').css('display', 'block');
   $('.chat_login').css('display', 'none');
   $('.chat_fullscreen_loader').css('display', 'block');
   break;
  case 4:
   $('#chat_converse').css('display', 'none');
   $('#chat_body').css('display', 'none');
   $('#chat_form').css('display', 'none');
   $('.chat_login').css('display', 'none');
   $('.chat_fullscreen_loader').css('display', 'block');
   $('#chat_fullscreen').css('display', 'block');
   break;
 }
}

</script>




<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/Drift.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/164071/Luminous.min.js'></script><script  src="./script.js"></script> 

<script>
  var demoTrigger = document.querySelector('.demo-trigger');

new Drift(demoTrigger, {
  paneContainer: document.querySelector('.detail'),
  inlinePane: 900,
  inlineOffsetY: -85,
  containInline: true,
  sourceAttribute: 'href'
});

new Luminous(demoTrigger);
</script>


  </body>
</html>