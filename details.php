<?php
  include 'header.php';
?>  
<!-- Content container starts-->
<div class="content_wrapper">
  <div id="content_area">
    <?php
      include 'shopping_cart.php';
    ?>

    <div id="details">
      <?php
        getdetails(); 
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