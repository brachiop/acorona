<?php 
    include_once('header.php'); 
?>  
      <!-- partial:partials/_sidebar.html -->
<?php 
    include_once('sidebar.php'); 
?>  
      <!-- partial -->
      
<?php 
    include_once('navbar.php'); 
?>      
      

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                <?php
                  for ($i = 1; $i <= 20; $i++) {
                    echo '<p>Contenu du main-panel N°'.$i.'</p>';
                  }
                  ?>
          </div>
          <!-- content-wrapper ends -->

<?php 
    include_once('footer.php'); 
?>    