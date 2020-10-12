 <?php
            $search = $_POST['search'];
            $query = "SELECT * FROM tbl_product WHERE _name LIKE '%$search%'";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result))
            {
              ?>
                <div class="product-layout product-grid col-md-4 col-xs-6 ">
              <div class="item">
                <div class="product-thumb clearfix mb_30">
                  <div class="image product-imageblock"> <a href="product_detail_page.php?id=<?=$row['_id']?>"> <img data-name="product_image" src="images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                  <div class="caption product-detail text-center">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem"><?=$row['_name']?></a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span><?=$row['_price']?></span>
                    </span>
                    <p class="product-desc mt_20 mb_60"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
                  </div>
                </div>
              </div>
            </div>
              <?php
            }
         ?>