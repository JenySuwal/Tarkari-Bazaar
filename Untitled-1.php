<?php
require('top.inc.php');
?>
 <!--main start-->
 <main>
        <!--first slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./veggies/vegetable_1.jpg" class="d-block w-100" alt="Vegetable">
              </div>
              <div class="carousel-item">
                <img src="./veggies/fruit.jpg" class="d-block w-100" alt="Fruits">
              </div>
              <div class="carousel-item">
                <img src="./veggies/bread.jpg" class="d-block w-100" alt="Bakery">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
<!--first slider end-->

<!--second slider-->
<!--First part-->

<section id='sessonal'>
          <div class="title text-center">
            <h1>ALl categorise </h1>
          </div>
<!--container for all products-->
          <div class="container mb-5 mt-5">
            <div class="row">
<!--card-1-->
<?php    $get_product=get_product($con,"");
             foreach ($get_product as $list ){
               ?>
              <div class="col-md-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-left">
                  <a class="" href="product.php?id=<?php echo $list['id']?>">
                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>"alt="" class="rounded" >
                    <h3><?php echo $list['name'];?></h3>
             </a>
 <!--card info-->
                <div class="cost mt-3 ">
                  <p class="star mt-3 align-items-center pt-2"> <span>Tarkaribazaar</span> <span></span>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  </p>
                </div>
                                    
                  <span class="text1"> Mrp:<?php echo $list['mrp'];?></span><br/><br>
                  <span class="text1">Selling Price 😃<?php echo $list['selling'];?></span>
                    <div class="cost mt-3 ">
                      <div class="box">
                          <label for="name">Quantity:</label>
                          <div class="dec button">-</div>
                          <input type="text" name="_qty_" id="1" value="0.5" class="input-filed">
                          <div class="inc button">+</div>
                      </div>
                    </div>
                  </div>
    <!--button for cards-->
                  <div class="p-3 shoe text-center text-white mt-3 cursor">
                    <span class="text-uppercase">Add to cart</span>
                  </div>
                </div>
              </div>
<!--card-1 ends-->
   <?php } ?> 
   </div> 

<!--card-1 ends-->

             </section>  
    </main>
<section>
    <div class="title text-center">
          <a class="" href="categories.php?id=<?php echo $get_product['0']['categories_id'] ?>">
       <?php echo $get_product['0']['categories'];?>
      </a>
  <div>
  <?php 
             foreach ($get_product as $list ){
               ?>
              <div class="col-md-4 col-lg-4">
                <div class="card mt-3">
                  <div class="product-1 align-items-center p-2 text-left">
                  <a class="" href="product.php?id=<?php echo $list['id']?>">
                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>"alt="" class="rounded" >
                    <h3><?php echo $list['name'];?></h3>
             </a>
 <!--card info-->
                <div class="cost mt-3 ">
                  <p class="star mt-3 align-items-center pt-2"> <span>Tarkaribazaar</span> <span></span>
                  <i class="fa4s fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  </p>
                </div>
                                    
                  <span class="text1"> Mrp:<?php echo $list['mrp'];?></span><br/><br>
                  <span class="text1">Selling Price 😃<?php echo $list['selling'];?></span>
                    <div class="cost mt-3 ">
                      <div class="box">
                          <label for="name">Quantity:</label>
                          <div class="dec button">-</div>
                          <input type="text" name="_qty_" id="1" value="0.5" class="input-filed">
                          <div class="inc button">+</div>
                      </div>
                    </div>
                  </div>
    <!--button for cards-->
                  <div class="p-3 shoe text-center text-white mt-3 cursor">
                    <span class="text-uppercase">Add to cart</span>
                  </div>
                </div>
              </div>
<!--card-1 ends-->
   <?php } ?> 
  </div>
    </div>
   
    </section>
      
    <!--Main end-->
    <?php
    require('footer.php');

    ?>