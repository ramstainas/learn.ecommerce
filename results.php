<?php
 include 'header.php';
?>  
<!-- Content container starts-->
<div class="content_wrapper">
  <div id="content_area">
    <?php
      include 'shopping_cart.php';
    ?> 
    
    <div id="products_box">
      <?php 
        if(isset($_GET['search'])){
          $search = $_GET['query'];
          searchProduct($search);  
        } 
      ?>
    </div>
  </div>
  <?php
    include 'sidebar.php';
  ?> 
</div>
<!-- Content container ends-->

<?php
 include 'footer.php';
?> 