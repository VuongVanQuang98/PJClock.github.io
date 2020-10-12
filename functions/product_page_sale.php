<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
   <?php
        require'require.php';
        $sql ="SELECT * FROM tbl_product";
        $result= mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result))
       {
        ?>
        <div class="product-layout product-grid col-md-4 col-xs-6 ">
              <div class="item">
                <div class="product-thumb clearfix mb_30">
                  <div class="image product-imageblock"> <a href="product_detail_page.php?id=<?=$row["_id"]?>"> 
                    <img data-name="product_image" src="images/product/<?=$row["img1"]?>" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> 
                    <img src="images/product/<?=$row["img2"]?>" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                    <div class="button-group text-center">
                      <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                      <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                      <div class="compare"><a href="#"><span>Compare</span></a></div>
                      <div class="add-to-cart"><a href="../cart_page.php?id=<?=$row["_id"]?>"><span>Add to cart</span></a></div>
                    </div>
                  </div>
                  <div class="caption product-detail text-center">
                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem"><?=$row['_name']?></a></h6>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                    <span class="price"><span class="amount"><span class="currencySymbol">$</span><?=$row['_price']?></span>
                    </span>
                    <p class="product-desc mt_20 mb_60"> <?=$row["_description"]?></p>
                  </div>
                </div>
              </div>
            </div>
        <?php
  }
          ?>
</html>