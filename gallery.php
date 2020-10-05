<?php include 'inc/header.php';?>


<img src="img/g-slider.gif" style="width: 100%;">

<section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <!-- <li class="active"><a href="#men" data-toggle="tab">Men</a></li> -->
                    <h3 class="hny-title mb-0 text-center">Men's <span>Fashion</span></h3>

                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                       <?php 
                       
                       $ab="select * from home_gallery";
                       $ac=mysqli_query($conn,$ab);
                       while($ad=mysqli_fetch_assoc($ac)) 
                       {
                      
                       ?>


                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/<?php echo $ad['image']; ?>" alt="polo shirt img" height="300" width="250"></a>
                            <h4 class="aa-product-title"><a href="#"><?php echo $ad['title']; ?></a></h4>
                          </figure>                        
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>

                       <?php  }  ?>
                                    
                      </ul>




                      <a class="aa-browse-btn" href="shirt.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                  </div></div></div></div></div></div></div></section>
                    





    <?php include 'inc/footer.php';?>