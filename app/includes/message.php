
<?php 
   if(isset($_SESSION['message'])): 
   ?>
        <div class="msg <?php echo $_SESSION['type']; ?>">
           <li><?php echo$_SESSION['message']; ?></li>
           <?php
              unset($_SESSION['message']);
              unset($_SESSION['type']);

            ?>
          <!-- <li>Some example text</li> -->
        </div>
   <?php endif; ?>
