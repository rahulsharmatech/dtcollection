<?php 

include 'inc/header.php';

?>
<style type="text/css">
  
.zoom {
 /* padding: 10px;*/
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.1); 
}

.modal-content
{
    background-color:#cd9443 !important;
}

</style>

<script>
	$(document).ready(function(){
        setTimeout(function() {
		  $("#myModal").modal('show');
        }, 4000);
	});
</script>


<?php


if(isset($_POST['sub'])) 
 {
           $name=$_POST['name'];
           $phone=$_POST['phone'];

            $to = 'umarshaikh2351@gmail.com';
            $subject = 'Dt Collection';
            $from = 'rahul.techstone@gmail.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: ' . $from . "\r\n";
            $message = '<html><body>';
            $message .= '<h3 style="color:#132f57;">Best Clothes Collection</h3>';
            $message .= '<p style="color:#132f57;font-size:15px;"><b>Name</b> : ' . $name . '</p>';
            $message .= '<p style="color:#132f57;font-size:15px;"><b>Phone</b> : ' . $phone . '</p>';
            $message .= '</body></html>';
            
            if(mail($to, $subject, $message, $headers)) 
            {
               
                echo "<script>alert('Thank You for Contacting Us We will revert back you soon..!!');window.location.href='contact.php';</script>";
            }

        else 
            {
                
          echo "<script>alert('Something Went Wrong..!!');window.location.href='index.php';</script>";

            }
            
    }

?>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="color:#fff;text-align:center;" class="modal-title">Subscribe our Newsletter</h4>
            </div>
            <div class="modal-body">
				<p style="color:#fff;">To Get additional 10% Discount on new arrivals..!</p>
                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Mobile Number">
                    </div>
                    <button type="submit" name="sub" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>


  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->

          <?php 
          
          $abc="select * from home_slider";
          $acc=mysqli_query($conn,$abc);
          while($vcc=mysqli_fetch_assoc($acc)) 
          {
        
          ?>

            <li>
              <div class="seq-model">
                <img data-seq src="img/<?php echo $vcc['image']; ?>" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq><?php echo $vcc['offer']; ?></span>                
                <h2 data-seq><?php echo $vcc['title']; ?></h2>                
                <p data-seq><?php echo $vcc['content']; ?></p>
                <a data-seq href="shirt.php" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>

          <?php   }  ?>
           
                     
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  

  <!-- / Promo section -->
  <!-- Products section -->



<section class="container-fluid w3l-content-w-photo-6" style="margin-bottom: 3%;">
    <!-- <div class="content-photo-6-mian py-"> -->
       <!-- <div class="container py-lg-"> -->
            
            <div class=" col-md-6">
                <img src="img/1.png" class="img-responsive" style="margin-top: 3%;">
            </div>


            <div class=" col-md-6">
                <h3 class="hny-title text-left">All Branded Men's Suits are Flat <span>30% Discount</span></h3>
                <p>We define a metrosexual as someone who really takes care of themselves in terms of grooming and style. There is nothing wrong with that. But I think you need to have some other values. It’s cool to incorporate some traditional values into metrosexuality. Then it becomes a good lifestyle.” — Frank Vincent</p>
                <a href="#" class="read-more btn">
                    Shop Now
                </a>
            </div>
          <!-- </div>


         </div> -->
   </section>



<?php 

$fa="select * from latest_banner";
$fb=mysqli_query($conn,$fa);
$fc=mysqli_fetch_assoc($fb);


?>
     <!-- banner section -->
  <section id="aa-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="img/<?php echo $fc['image']; ?>" alt="fashion banner img" style="width: 100%;" height="350"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<section id="aa-promo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1 style=" text-align: center; color: #18191a; font-size: 40px;"><strong style="font-weight: 600;">NEW ARRIVALS</strong></h1><hr>
          
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="img/g-1.jpg" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="t-shirt.php">For T-shirts</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/g-2.jpeg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="shirt.php">For Men</a></h4>                  
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/g-4.jpg" alt="img">       
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="jeans.php">On Denim</a></h4>             
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/g-3.jpg" alt="img">                    
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="jeans.php">For Jeans</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-5.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="trousers.php">New Arrivals</a></h4>                  
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
  </section>





  <!-- Support section -->
  
  <!-- / Support section -->

 
  <!-- / Products section -->

  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h1 class="filter" style=" text-align: center; color: #18191a; font-size: 40px; "><strong style="font-weight: 600;">CATEGORIES</strong></h1>
          <hr>
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#tshirts" data-toggle="tab">Tshirts</a></li>
                <li><a href="#shirts" data-toggle="tab">Shirts</a></li>
                <li><a href="#jeans" data-toggle="tab">Jeans</a></li>                    
                <li><a href="#trasousers" data-toggle="tab">Trousers</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="tshirts">
                  <ul class="aa-product-catg aa-popular-slider">
                 
                  <?php
                   
                   $za="select * from product_details where category='tshirts'";
                   $zb=mysqli_query($conn,$za);
                   while($zc=mysqli_fetch_assoc($zb)) 
                   {
              
                  ?>

                    <!-- start single product item -->

                    <li class="zoom">
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/<?php echo $zc['image']; ?>" alt="polo shirt img"  height='300' width='250'></a>
                        <h4 class="aa-product-title"><a href="product_details.php?pid=<?php echo $zc['product_id']; ?>" class='btn btn-warning'><b style="color: #fff;">Buy Now</b></a></h4>
                      </figure>
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->

                   <?php  }  ?>
                                                                                                  
                  </ul>
                  <a style="float: right;" class="aa-browse-btn" href="t-shirt.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->


                
                
                <!-- start featured product category -->
                <div class="tab-pane fade" id="shirts">

                 <ul class="aa-product-catg aa-featured-slider">
                   
                   <?php 
                    
                    $xa="select * from product_details where category='shirts'";
                    $xb=mysqli_query($conn,$xa);
                    while($xc=mysqli_fetch_assoc($xb)) 
                    {
                    
                   ?>

                    <!-- start single product item -->

                    <li class="zoom">
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/<?php echo $xc['image']; ?>" alt="polo shirt img"  height='300' width='250'></a>
                         <h4 class="aa-product-title"><a href="product_details.php?pid=<?php echo $xc['product_id']; ?>" class='btn btn-warning'><b style="color: #fff;">Buy Now</b></a></h4>
                       </figure>
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->

                  <?php }  ?>
                                                                                                  
                  </ul>
                  <a style="float: right;" class="aa-browse-btn" href="shirt.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->



                <!-- start latest product category -->
                <div class="tab-pane fade" id="jeans">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                  
                  <?php
                   
                   $wa="select * from product_details where category='jeans'";
                   $wb=mysqli_query($conn,$wa);
                   while ($wc=mysqli_fetch_assoc($wb)) 
                   {
                

                  ?>

                    <li class="zoom">
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/<?php echo $wc['image']; ?>" alt="polo shirt img" height='300' width='250'></a>
                        <h4 class="aa-product-title"><a href="product_details.php?pid=<?php echo $wc['product_id']; ?>" class='btn btn-warning'><b style="color: #fff;">Buy Now</b></a></h4>
                      </figure>
                      
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>

                   <?php  }  ?>
                    
                  </ul>
                   <a style="float: right;" class="aa-browse-btn" href="jeans.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->  


                   <!-- start latest product category -->
                <div class="tab-pane fade" id="trasousers">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                   
                   <?php 
                    $oa="select * from product_details where category='trasousers'";
                    $ob=mysqli_query($conn,$oa);
                    while ($oc=mysqli_fetch_assoc($ob)) 
                    {

                    ?>

                    <li class="zoom">
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/<?php echo $oc['image']; ?>" alt="polo shirt img"  height='300' width='250'></a>
                        <h4 class="aa-product-title"><a href="product_details.php?pid=<?php echo $oc['product_id']; ?>" class='btn btn-warning'><b style="color: #fff;">Buy Now</b></a></h4>
                      </figure>
                      
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                   
                   <?php  }  ?>


                  </ul>
                   <a style="float: right;" class="aa-browse-btn" href="trousers.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->  

              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->

  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->

            <?php 

             $ga="select * from testimonial";
             $gb=mysqli_query($conn,$ga);
             while ($gc=mysqli_fetch_assoc($gb)) 

             {
             
              ?>
              
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/<?php echo $gc['image']; ?>" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p><?php echo $gc['content']; ?></p>
                  <div class="aa-testimonial-info">
                    <p><?php echo $gc['name']; ?></p>
                  </div>
                </div>
              </li>

             <?php  }  ?>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  
  <!-- / Latest Blog -->

  <!-- Client Brand -->

  <!-- / Client Brand -->

  <!-- Subscribe section -->


<section id="aa-support" style="margin-top: 2%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>You can get Free Shipping on some Products.Buy Now till the offer.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>Delivery In all Over India</h4>
                <P>We are delivering all dtcollection products in all over india.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Our Customer Support Executive is always active you can contact 24/7 regarding your order and latest collection.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p style="max-width: 650px; margin: 0 auto;">Subscribe Us for the daily updates..!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 







 <div class="fabs">
            <div class="chat">
               <div class="chat_header">
                  <div class="chat_option">
                     <div class="header_img">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
                     </div>
                     <span id="chat_head">Jane Doe</span>
                     <br> <span class="agent">Agent</span> <span class="online">(Online)</span>
                     <span id="chat_fullscreen_loader" class="chat_fullscreen_loader"><i class="fullscreen zmdi zmdi-window-maximize"></i></span>
                  </div>
               </div>
               <div class="chat_body chat_login">
                  <a id="chat_first_screen" class="fab"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  <p>We make it simple and seamless for businesses and people to talk to each other. Ask us anything</p>
               </div>
               <div id="chat_converse" class="chat_conversion chat_converse">
                  <a id="chat_second_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Hey there! Any question?
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  Hello!</span>
                  <span class="status">20m ago</span>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Hey! Would you like to talk sales, support, or anyone?
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="status2">Just now. Not seen yet</span>
               </div>
               <div id="chat_body" class="chat_body">
                  <div class="chat_category">
                     <a id="chat_third_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
                     <p>What would you like to talk about?</p>
                     <ul>
                        <li>Tech</li>
                        <li class="active">Sales</li>
                        <li>Pricing</li>
                        <li>other</li>
                     </ul>
                  </div>
               </div>
               <div id="chat_form" class="chat_converse chat_form">
                  <a id="chat_fourth_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Hey there! Any question?
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  Hello!</span>
                  <span class="status">20m ago</span>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Agent typically replies in a few hours. Don't miss their reply.
                     <div>
                        <br>
                        <form class="get-notified">
                           <label for="chat_log_email">Get notified by email</label>
                           <input id="chat_log_email" placeholder="Enter your email"/>
                           <i class="zmdi zmdi-chevron-right"></i>
                        </form>
                     </div>
                  </span>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Send message to agent.
                     <div>
                        <form class="message_form">
                           <input placeholder="Your email"/>
                           <input placeholder="Technical issue"/>
                           <textarea rows="4" placeholder="Your message"></textarea>
                           <button>Send</button> 
                        </form>
                     </div>
                  </span>
               </div>
               <div id="chat_fullscreen" class="chat_conversion chat_converse">
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Hey there! Any question?
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  Hello!</span>
                  <div class="status">20m ago</div>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Hey! Would you like to talk sales, support, or anyone?
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  Where can I get some?</span>
                  <span class="chat_msg_item chat_msg_item_admin">
                     <div class="chat_avatar">
                        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
                     </div>
                     The standard chuck...
                  </span>
                  <span class="chat_msg_item chat_msg_item_user">
                  There are many variations of passages of Lorem Ipsum available</span>
                  <div class="status2">Just now, Not seen yet</div>
                  <span class="chat_msg_item ">
                     <ul class="tags">
                        <li>Hats</li>
                        <li>T-Shirts</li>
                        <li>Pants</li>
                     </ul>
                  </span>
               </div>
               <div class="fab_field">
                  <a id="fab_camera" class="fab"><i class="fa fa-camera" aria-hidden="true"></i></a>
                  <a id="fab_send" class="fab"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                  <textarea id="chatSend" name="chat_message" placeholder="Send a message" class="chat_field chat_message"></textarea>
               </div>
            </div>
            <a id="prime" class="fab"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
         </div>



  <?php include 'inc/footer.php';?>