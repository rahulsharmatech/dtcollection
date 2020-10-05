<?php  
include 'inc/header.php';

if(isset($_POST['paynow'])) 
{
  
  $product_id=$_POST['product_id'];
  $qty=$_POST['qty'];
  $product=$_POST['product'];
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $payment_mode=$_POST['payment_mode'];
  $payment_id=$_POST['payment_id'];
  $address=$_POST['address'];


        $img_name = $_FILES['image']['name'];
        $img_tmp =  $_FILES['image']['tmp_name'];
        $img_extension=explode(".",$img_name);
        $img_name = strstr($img_name, '.', true);
        $img_extension=strtolower(end($img_extension));
        $img_new_name=$img_name.'.'.$img_extension;
        $store="img/payments/".$img_new_name;
        move_uploaded_file($img_tmp, $store);


$pf="INSERT INTO order_detail(product_id,qty,pname,name,phone,email,payment_mode,payment_id,address,pay_pic)VALUES('$product_id','$qty','$product','$name','$phone','$email','$payment_mode','$payment_id','$address','$img_new_name')";

$ph=mysqli_query($conn,$pf);

if($ph)
	{
	  echo "<script>alert('Your Order Recieved Susseccfully Contact Admin For Payment Status..!');</script>";
	}
else
	{
		echo $conn->error;
	}

}


?>

<body>

<br>

<div class="container">	

<?php 

$gh="select * from order_detail where payment_id='$payment_id'";
$gj=mysqli_query($conn,$gh);
$gk=mysqli_fetch_assoc($gj);

?>

  <div class="jumbotron text-xs-center">
  <h1 style="text-align: center;" class="display-3"><img style="border-radius: 80px;" src="img/success.jpg" height="80" width="100">Thank You <b><?php echo $gk['name']; ?>!</b></h1>
  <p style="text-align: center;" class="lead"><strong>Please Contact Admin For Your Payment Status</strong>  +91 9565288090</p>
  <p style="text-align: center;" class="lead"><strong>Your Order Id Is --&nbsp</strong><b style='color:red;'><?php echo $gk['order_id']; ?></b></p>
  <p style="text-align: center;" class="lead"><strong>Your Payment Id Is --&nbsp</strong><b style='color:red;'><?php echo $gk['payment_id']; ?></b></p>
  <hr>
  <p style="text-align: center;">Having trouble? <a href="contact.php">Contact us</a></p>
  <p style="text-align: center;" class="lead">
    <a class="btn btn-primary btn-sm" href="shirt.php" role="button">Continue Shopping</a>
  </p>

  </div>

</div>


</body>

<?php include 'inc/footer.php'; ?>