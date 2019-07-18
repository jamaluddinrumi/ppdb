    <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
      <div class="grid-container">
      <h2 class="text-center">Pengaturan</h2>

<?php echo form_open('pengaturan'); ?>

<div class="grid-x grid-padding-x grid-margin-x">
  <div class="cell large-6">
    <h6>No. WhatsApp:</h6>
    <div class="input-group">
      <span class="input-group-label">+62</span>
      <input name="whatsapp" class="input-group-field" type="tel" value="<?php echo $whatsapp; ?>">
      <div class="input-group-button">
      </div>
    </div>
  </div>
</div>

<div class="grid-x grid-padding-x grid-margin-x">
  <div class="cell large-12 text-center">
    <?php
      $attributes = array('class' => 'submit', 'id' => 'submit');
      echo form_submit('pengaturan', 'Kirim', $attributes);
    ?>
  </div>
</div>

<?php echo form_close(); ?>


      </div><!-- .app-dashboard-body-content -->
    </div><!-- .app-dashboard-top-nav-bar -->
</div><!-- .app-dashboard -->
</div><!-- .grid-container -->
