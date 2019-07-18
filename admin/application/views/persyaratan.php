    <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
      <div class="grid-container">

        <h2 class="text-center">Persyaratan</h2>

        <div class="grid-container">
          <div class="grid-x">
            <div class="cell large-12">
              <?php
              $attributes = array('class' => 'persyaratan', 'id' => 'persyaratan');
              echo form_open('persyaratan');
              ?>
                  <?php
                  $data = array(
                          'name'          => 'persyaratan',
                          'id'            => '',
                          'value'         => '',
                          'style'         => ''
                  );

                  // echo form_textarea($data);
                  ?>
                  <textarea id="summernote" name="persyaratan"><?php echo $persyaratan; ?></textarea>
                  <br />
                  <?php
                  $attributes = array('class' => 'submit', 'id' => 'submit');
                  echo form_submit('submit', 'Ubah', $attributes);
                  ?>
              <?php echo form_close(); ?>
            </div>
          </div><!-- .grid-x -->
        </div><!-- .grid-container -->

      </div><!-- .app-dashboard-body-content -->
    </div><!-- .app-dashboard-top-nav-bar -->
  </div><!-- .app-dashboard -->
</div><!-- .grid-container -->
