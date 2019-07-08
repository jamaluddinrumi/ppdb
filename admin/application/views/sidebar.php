
  <div class="app-dashboard-body off-canvas-wrapper">
    <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
      <div class="app-dashboard-sidebar-inner">
        <div class="app-dashboard-sidebar-title-area">
          <div class="app-dashboard-close-sidebar">
            <a id="main-logo" class="app-dashboard-sidebar-block-title hide-for-small-only" href="<?php echo site_url(); ?>">
              <object data="<?php echo base_url(); ?>assets/image/muga logo admin.svg" type="image/svg+xml">
                <img src="<?php echo base_url(); ?>assets/image/muga logo header.png" />
              </object>
            </a>
            <!-- Close button -->
            <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
              <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
            </button>
          </div>
          <div class="app-dashboard-open-sidebar">
            <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
              <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
            </button>
          </div>
        </div><!-- .app-dashboard-sidebar-title-area -->
        <ul class="menu vertical">
          <?php
            $segment = strtolower($this->uri->rsegment(1));
            // echo "<pre>";
            // echo $segment;
            // echo "</pre>";
          ?>
          <li><a href="<?php echo base_url(); ?>" class="<?php echo $segment == 'berita' ? 'is-active' : '' ; ?>">
            <ion-icon name="person-add"></ion-icon><span class="app-dashboard-sidebar-text">Berita</span>
          </a></li>
          <li><a href="<?php echo base_url(); ?>" class="<?php echo $segment == 'persyaratan' ? 'is-active' : '' ; ?>">
            <ion-icon name="person-add"></ion-icon><span class="app-dashboard-sidebar-text">Persyaratan</span>
          </a></li>
          <li><a href="<?php echo base_url(); ?>hasil" class="<?php echo $segment == 'hasil' ? 'is-active' : ''; ?>">
            <ion-icon name="list-box"></ion-icon></ion-icon><span class="app-dashboard-sidebar-text">Daftar Peserta</span>
          </a></li>
          <li><a href="<?php echo base_url(); ?>" class="<?php echo $segment == 'profil' ? 'is-active' : '' ; ?>">
            <ion-icon name="person-add"></ion-icon><span class="app-dashboard-sidebar-text">Profil Sekolah</span>
          </a></li>
          <li><a href="<?php echo base_url(); ?>logout" class="<?php echo $segment == 'keluar' ? 'is-active' : ''; ?>">
            <ion-icon name="ios-power"></ion-icon><span class="app-dashboard-sidebar-text">Keluar</span>
          </a></li>
        </ul>
        <p class="profile-email"><?php echo $this->ion_auth->user()->row_array()['email']; ?></p>
      </div>



    </div>
