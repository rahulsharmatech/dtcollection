<?php include 'inc/header.php';?>

<style type="text/css">
  
.zoom {
 /* padding: 10px;*/
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.1); 
}


</style>

<img src="img/t_black.jpeg" style="width: 100%;">
<section class="t_head" style="margin: 3% 0 3% 0;">
<div class="container">
	<div class="row">
		<br>
	<h1 style="text-align: center; color: red; font-weight: bold;">Trendy Jeans</h1><br>

<?php 

$ab="select * from product_details where category='jeans'";
$av=mysqli_query($conn,$ab);
while ($ac=mysqli_fetch_assoc($av)) 
{


?>
		<div class="col-md-4">
			<div class="pro-box">	
				<img src="img/man/<?php echo $ac['image']; ?>" class="rounded-img zoom" width='300' height='300'>
				<h2><?php echo $ac['title']; ?></h2>
		<a href="product_details.php?pid=<?php echo $ac['product_id']; ?>" class='btn btn-warning'>Buy Now</a>
			</div>
		</div>

<?php  }  ?>

		
	</div>
</div>
</section>
<br>

<?php include 'inc/footer.php';?>