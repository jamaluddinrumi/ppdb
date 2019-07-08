<?php $this->load->view('header'); // load header ?>

<div class="grid-x align-center-middle" style="height: 100vh;" style="visibility: none;" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600" data-aos-easing="linear">

  <div class="cell medium-12 logo-cell">
    <div class="grid-x align-center">
      <object class="" data="<?php echo base_url(); ?>assets/image/muga logo admin.svg" type="image/svg+xml">
        <img src="<?php echo base_url(); ?>assets/image/muga logo header.png" />
      </object>
    </div><!-- .grid-x.align-center -->
  </div><!-- .cell -->

  <div class="cell medium-12 info-message-cell">
    <div class="grid-x align-center">
      <div id="infoMessage" class="text-center animated shake faster"><?php echo $message;?></div>
    </div><!-- .grid-x.align-center -->
  </div><!-- .cell -->

  <div class="cell medium-12 form-cell">
    <div id="login-container" class="form-container grid-x align-center">
        <div id="login-cell-container" class="form-wrapper cell medium-4 large-3">

<div class="grid-x">

<div id="login-form" class="cell medium-12">

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p class="form-submit-container text-center"><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>

</div><!-- #form-login-wrapper -->

</div><!-- .grid-x -->

</div><!--. cell -->

</div><!-- .grid-x.align-center-middle -->

<?php $this->load->view('footer'); // load footer ?>
