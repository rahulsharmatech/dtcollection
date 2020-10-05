<?php 

$page_id='contact';
include 'inc/header.php';

?>


 <section id="aa-catg-head-banner">
   <img src="img/contant.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contact</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Contact</li>
        </ol>
      </div>
     </div>
   </div>
  </section>


  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
         
           <div class="aa-contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914589.4389492524!2d82.38013596748837!3d26.43589819507611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991a36066992c69%3A0x5f993980afe9366e!2sD%20T%20collection!5e0!3m2!1sen!2sin!4v1594963926603!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>


<?php


if(isset($_POST['sub'])) 
 {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $subject=$_POST['subject'];
           $phone=$_POST['phone'];
           $messagee=$_POST['messagee'];

            $to = 'umarshaikh2351@gmail.com';
            $subject = 'Dt Collection';
            $from = 'rahul.techstone@gmail.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: ' . $from . "\r\n";
            $message = '<html><body>';
            $message .= '<h3 style="color:#132f57;">Best Clothes Collection</h3>';
            $message .= '<p style="color:#132f57;font-size:15px;"><b>Name</b> : ' . $name . '</p>';
            $message .= '<p style="color:#132f57;font-size:15px;"><b>Email</b> : ' . $email . '</p>';
             $message .= '<p style="color:#132f57;font-size:15px;"><b>Subject</b> : ' . $subject . '</p>';
              $message .= '<p style="color:#132f57;font-size:15px;"><b>Phone</b> : ' . $phone . '</p>';
            $message .= '<p style="color:#132f57;font-size:15px;"><b>Messege</b> : ' . $messagee . '</p>';
            $message .= '</body></html>';
            
            if(mail($to, $subject, $message, $headers)) 
            {
               
                echo "<script>alert('Thank You for Contacting Us We will revert back you soon..!!');window.location.href='contact.php';</script>";
            }

        else 
            {
                
          echo "<script>alert('Something Went Wrong..!!');window.location.href='contact.php';</script>";

            }
            
    }

?>




           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Your Name" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="email" placeholder="Email" name="email" class="form-control">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" name="subject" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="phone" name="phone" class="form-control">
                        </div>
                      </div>
                    </div>                  
                     
                    <div class="form-group">                        
            <textarea class="form-control" rows="3" name="messegee" placeholder="Message"></textarea>
                    </div>
                    <center><button class="aa-secondary-btn" type="sub" name="sub">Send</button></center>
                  </form>
                 </div>
               </div>
               
               <?php 
                 
                 $abc="select * from contact";
                 $bcc=mysqli_query($conn,$abc);
                 $jj=mysqli_fetch_assoc($bcc);


               ?>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>DT Collection</h4>
                     <p> Shop for Mens' Clothing online at best prices in India. Choose from a wide range of Men' Clothing at Dt Collection.</p>
                     <p><span class="fa fa-home"></span><?php echo $jj['address']; ?></p>
                     <p><span class="fa fa-phone"></span> <?php echo $jj['phone']; ?></p>
                     <p><span class="fa fa-envelope"></span>Email: <?php echo $jj['email']; ?></p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>For the Latest Collection And be Updated with us...</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->






    <?php include 'inc/footer.php';?>