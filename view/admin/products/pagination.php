<?php for ($i = 1; $i <= $so_trang; $i++) { ?>
      <?php
      if (isset($_GET['timkiem'])) {  ?>
            <a class="pagination" href="?pagination=<?php echo $i ?>&controller=product&timkiem=<?php echo $timkiem ?>">
                  <?php echo $i ?>
            </a>
      <?php } elseif (isset($_GET['kytu'])) { ?>
            <a class="pagination" href="?pagination=<?php echo $i ?>&controller=product&action=characters&kytu=<?php echo $kytu ?>">
                  <?php echo $i ?>
            </a>
      <?php } elseif (isset($_GET['gia'])) { ?>
            <a class="pagination" href="?pagination=<?php echo $i ?>&controller=product&action=price&gia=<?php echo $gia ?>">
                  <?php echo $i ?>
            </a>
      <?php } elseif (isset($_GET['min_price']) && isset($_GET['max_price'])) { ?>
            <a class="pagination" href="?pagination=<?php echo $i ?>&controller=product&min_price=<?php echo $min_price ?>&max_price=<?php echo $max_price ?>&action=pricerange">
                  <?php echo $i ?>
            </a>
      <?php } else { ?>
            <a class="pagination" href="?pagination=<?php echo $i ?>&controller=product">
                  <?php echo $i ?>
            </a>
      <?php } ?>
<?php } ?>