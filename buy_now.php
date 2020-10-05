<?php
include 'inc/header.php';

$ser='';

if(isset($_POST['idd']))
{
  $bc=$_POST['idd'];
  $ad="select * from product_details where product_id='$bc'";
  $avv=mysqli_query($conn,$ad);
  $ser=mysqli_fetch_assoc($avv);
}


if(isset($_POST['sub'])) 
{
  $qty=$_POST['qty'];
}

?>

<div class="buy" style="margin: 3%;">
<div class="container">
<div class="row">

<div class="col-md-6">

<?php   

$price=$ser['sale_price'];
$total=$qty*$price;

?>

<article class="fullScreen80Flex contactForm">
<div class="formContainer">
<div class="heading"></div>

<h3 style="text-align: center; color: #0e4e9c;"><b>You Have To Pay </b><b><?php echo $total;  ?> ₹/-Only</b></h3>



<div id="contact-us" class="form">

<form id="contactForm" method="post" action="success.php" enctype="multipart/form-data">

<input type="hidden" name="qty" value="<?php echo $qty; ?>">

<input type="hidden" name="product_id" value="<?php echo $ser['product_id']; ?>">

<input type="text" id="pname" name="product" value="<?php echo $ser['title']; ?>" placeholder="Name" readonly>

<input type="text" name="name" placeholder="Enter Your name" required="">

<input type="text" id="name" name="phone" placeholder="Enter Your Phone Number" required="">

<input type="email" id="email" name="email" placeholder="Enter Your Email" required="">

<select id="email" name="payment_mode" id="cars">
  <option value="">Select Payment Mode</option>
  <option value="phonepe">Phone Pe</option>
  <option value="googlepay">Google Pay</option>
  <option value="paytm">Paytm</option>
</select>

<input type="text" id="text" name="payment_id" placeholder="Payment id" required="">

<input type="file" id="text" name="image" placeholder="Upload Payment Screenshot" required="">

<textarea id="address" name="address" placeholder="Enter Address" style="background-color: #0e4e9c;">
	
</textarea>


<div id="status">
</div>

<button type="submit" name="paynow">Submit Your Order</button>

</form>

</div>
<a style="display:none !important;" href="https://www.thewebblinders.in/programming/article/responsive-html-contact-us-form-php-mysql-with-validations-6046">SOURCE</a>
</div>
</article>
</div>




<div class="col-md-6">

<div class="row">
<h2 class="formheading">Please Enter Your Payment Id After Scaning And SuccessFull Payment</h2>

<br>

<div class="col-md-4">
<img src="https://www.searchpng.com/wp-content/uploads/2018/11/phone-pe-715x715.png" style="width: 100%;">
<p style=" text-align: center;
color: #0e4e9c;
font-weight: bolder;
font-size: 15px;">Phone Pay</p>
</div>



<div class="col-md-4">
<img src="https://image.flaticon.com/icons/svg/825/825454.svg" style="width: 100%;">
<p style=" text-align: center;
color: #0e4e9c;
font-weight: bolder;
font-size: 15px;">Paytm</p>
</div>


<div class="col-md-4">
<img src="https://www.searchpng.com/wp-content/uploads/2019/02/Google-Pay-Logo-Icon-PNG-715x714.png" style="width: 100%;">
<p style=" text-align: center;
color: #0e4e9c;
font-weight: bolder;
font-size: 15px;">Google Pay</p>
</div>
</div>



</div>

</div>
</div>
</div>




<?php include 'inc/footer.php';?>