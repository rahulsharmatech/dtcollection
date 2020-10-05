<?php 

include 'inc/header.php';

$res='';
if(isset($_GET['pid']))
{
   $ab=$_GET['pid'];
   $ss="select * from product_details where product_id='$ab'";
   $abc=mysqli_query($conn,$ss);
   $res=mysqli_fetch_assoc($abc);
}


?>

<section class="content">
  <article class="demo-area">
    <a class="demo-trigger" href="img/man/<?php echo $res['image']; ?>">
        <img src="img/man/<?php echo $res['image']; ?>" height='450' width='450'>
    </a>

      <div class="detail">
   
          <h3><?php echo $res['title']; ?></h3>

          <span style="color: #B12704; padding: 1% 0px;">Brand:&nbsp DT COLLECTION</span> <br>
           <span style="color: #B12704; padding: 1% 0px;">Category:&nbsp <b><?php echo $res['category']; ?></b></span> <br>
         
          <div id="desktop_unifiedPrice" class="feature" data-feature-name="desktop_unifiedPrice" data-cel-widget="desktop_unifiedPrice" style="padding: 2% 0;">


<div id="unifiedPrice_feature_div" class="feature" data-feature-name="unifiedPrice" data-cel-widget="unifiedPrice_feature_div">

<div id="price" class="a-section a-spacing-small">
<table class="a-lineitem">

<tbody><tr>
<td class="a-color-secondary a-size-base a-text-right a-nowrap">M.R.P.:</td>
<td class="a-span12 a-color-secondary a-size-base">



<span class="priceBlockStrikePriceString a-text-strike"> ₹&nbsp; <del><?php echo $res['mrp']; ?></del> </span>

<span id="listPriceLegalMessage">

</span>
<style>
#listPriceLegalMessageText {
margin-left: 5px !important;
}
#listPriceLegalMessage .a-popover-trigger:hover {
text-decoration: underline !important;
}
#listPriceLegalMessage .a-icon-popover {
display: inline-block !important;
margin-left: 0px !important;
margin-top: 6px !important;
}
</style>

</td>
</tr>

<tr id="priceblock_ourprice_row">
<td id="priceblock_ourprice_lbl" class="a-color-secondary a-size-base a-text-right a-nowrap">Price:</td>
<td class="a-span12">

<span id="priceblock_ourprice" class="a-size-medium a-color-price priceBlockBuyingPriceString" style="color: #B12704; font-weight: 300;">₹&nbsp;<?php echo $res['sale_price']; ?></span>

<span id="ourprice_shippingmessage">



<?php 

$ba=$res['mrp'];
$bc=$res['sale_price'];

$bd=$ba-$bc;

$dis=(($ba-$bc)/$ba)*100;


?>
</td>
</tr>
<tr id="regularprice_savings">
<td class="a-color-secondary a-size-base a-text-right a-nowrap">You Save: </td>
<td class="a-span12 a-color-price a-size-base priceBlockSavingsString" style="color: #B12704; font-weight: 300;">

₹&nbsp; <?php echo $bd; ?> | (<?php echo round($dis); ?>%)&nbsp&nbspOff


</td>
</tr>

<tr id="vatMessage">
<td></td>
<td>

<span class="a-size-base"> Inclusive of all taxes</span>


</td>
</tr>

</tbody></table><br>


<div class="a-row a-spacing-base">


<div class="a-column a-span12 a-text-left">
<span class="a-dropdown-container">


<form method="POST" action="buy_now.php" enctype="multipart/form-data">
  <input type="hidden" name="idd" value="<?php echo $res['product_id']; ?>">
<label for="quantity" class="a-native-dropdown">Quantity : </label>

<select name="qty" autocomplete="off" id="quantity" tabindex="0" class="a-native-dropdown" required>

<option value="1"> 1
</option>
<option value="2">2
</option>
<option value="3">3
</option>
<option value="4">4
</option>
<option value="5">5
</option>
<option value="6">6
</option>
<option value="7">7
</option>
<option value="8">8
</option>
<option value="9">9
</option>
<option value="10">10
</option>


</select>

</div>
</div>
</div>

</div>

<div id="quantityPricingTableSummary_feature_div" class="feature" data-feature-name="quantityPricingTableSummary" data-cel-widget="quantityPricingTableSummary_feature_div">

</div>

</div>


   <input style="width: 150px;" type="submit" name="sub" class="btn btn-success" value="Buy Now">
<!-- <a href="buy_now.php?pid=<?php echo $res['product_id']; ?>">
</a> -->

</form>


        <ul class="proset">
          <li>Fit Type: Regular Fit Regular fit.</li>
           <li>Pattern - Printed Men’s Formal Double yoke for extra durability & stiffness</li>
          <li>Machine wash.</li>
           <li>Material: 100% Cotton.</li>
        </ul>

      

      </div>
  </article>
</section>






<?php include 'inc/footer.php';?>