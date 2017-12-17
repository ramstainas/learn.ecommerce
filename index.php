<!--header container-->
<?php
 include 'header.php';
?>  
<!--Content container starts-->
<div class="content_wrapper">
  <div id="content_area">
    <!--shopping cart container-->
    <?php
      include 'shopping_cart.php';
    ?> 

    <div id="products_box">
      <?php 
        getProducts();
        getCategoryBasedProducts();
      ?>
        
    </div>
  </div>

  <?php
    include 'sidebar.php';
  ?> 


</div>
<!--Content container ends-->

<!--Footer container-->
<?php
 include 'footer.php';
?> 