<footer>
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell large-1">
        <img class="whatsapp-logo" src="<?php echo base_url(); ?>assets/logo/whatsapp.png" />
      </div>
      <div class="cell large-5">
        <p class="untuk-info-lengkap">untuk informasi lengkap <br />
        dapat menghubungi kami via</p>
      </div>
      <div class="cell large-3 large-offset-3">
        <?php $whatsapp_numbers = preg_replace('/[^\d]/','',$whatsapp); ?>
        <a target="_blank" class="button primary shadow big-rounded whatsapp light" href="https://wa.me/62<?php echo $whatsapp_numbers ?>"><ion-icon name="logo-whatsapp"></ion-icon> <span>0<?php echo $whatsapp ?></span></a>
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo base_url(); ?>assets/foundation/js/vendor/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/foundation/js/vendor/foundation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/foundation/js/vendor/what-input.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="<?php echo base_url(); ?>assets/foundation/js/app.js"></script>
</body>
</html>
