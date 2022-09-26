<section class="footerErigo">

 
  <div class="footerUp">
 <div class="footer f1">
    <a href="#"><img class="logo-navbar footer" src="assets/erigo1.png" alt=""></a>
    <div class="socials">
    <a href="https://www.facebook.com/erigostoreapparel/"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
      <a href="https://www.youtube.com/c/ErigoOfficial"><i class="fa-brands fa-youtube-square fa-2x"></i></a>
      <a href="https://www.instagram.com/erigostore/"><i class="fa-brands fa-instagram-square fa-2x"></i></a>
    </div>
    
  </div>
  
  <div class="footer f2">

    <h7>Mailing List</h7>
    <p>Sign up to our mailing list to get the latest updates about Erigo new products and promotions.</p>
    <form id="marketEmail" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="emailErigo">
        <!-- Email input -->
        <div class="form-outline form-white formBox">
          
          <input type="email" id="form5Example29" class="form-control formBox" name="emailMailing">
          <label class="form-label" for="form5Example29">Email address</label>
        </div>

        <label for="submitEmail"><i class="fa-solid fa-circle-plus fa-2x"></i></label>
        <input type="submit" name="submitEmail" id="submitEmail" style="display: none; visibility: none;">
        
      </div>
      </form>
  </div>
  
  <div class="footer f3">
    <a href="ourupdates.php">Our Updates</a>
    <a href="latestseries.php">Series</a>
    <a href="FAQ.php">FAQ</a>
    <a href="join us.php">Join Us</a>
  </div>
  </div>

  <div class="text-center p-3 text-white copyrightErigo" style="background-color: #1D1819;">
    © 2022 Copyright:
    <a class="text-white" href="https://erigostore.co.id/">ErigoAparrel.com</a>
  </div>
</section>



</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <?php if($valid == 1 && isset($_POST['submit'])){ ?>
    <script>
          swal({
            title: "Data Uploaded",
            text: "We will email the confirmation",
            icon: "success",
            button: "Close",
          });
        </script>

    <?php }else if($valid == 0 && isset($_POST['submit'])){ ?>

      <script>
          swal({
            title: "Please check again your input",
            icon: "error",
            button: "Close",
          });
        </script>

      <?php } ?>






      <?php if($validMailing == 1 && isset($_POST['submitEmail'])){ ?>
    <script>
          swal({
            title: "<?php echo $errorsMailing ?>",
            icon: "error",
            button: "Close",
          });
        </script>

    <?php }else if($validMailing == 2 && isset($_POST['submitEmail'])){ ?>

      <script>
          swal({
            title: "<?php echo $errorsMailing ?>",
            icon: "error",
            button: "Close",
          });
        </script>

      <?php }else if($validMailing == 0 && isset($_POST['submitEmail'])){ ?>
        <script>
          swal({
            title: "Thank you for joining our mailing list !",
            text: "We will notify latest updates abour Erigo",
            icon: "success",
            button: "Close",
          });
        </script>


        <?php } ?>
</html>