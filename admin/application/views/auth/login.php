<?php $this->load->view('header'); // load header ?>

  <div class="grid-x align-center-middle" style="height: 100vh;">

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

<?php echo form_open("auth/login");?>

  <p>
    <?php echo form_input($identity, '', 'placeholder=email');?>
  </p>

  <p>
    <?php echo form_input($password, '', 'placeholder=password');?>
  </p>

  <?php $attributes = array('class' => 'button expanded', 'id' => 'submit'); ?>
  <p class="form-submit-container text-center"><?php echo form_submit('submit', lang('login_submit_btn'), $attributes);?></p>

<?php echo form_close();?>

</div><!-- #form-login-wrapper -->

</div><!-- .grid-x -->

</div><!-- #login-cell-container -->

</div><!-- #login-container -->

</div><!-- .cell -->

<div class="cell medium-12 forget-password-cell">
<div class="grid-x align-center">

  <div id="forgot-password-cell-container" class="form-footer cell medium-4 large-3">
    <p class="text-center"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
  </div>

  </div>
</div><!--. cell -->

</div><!-- .grid-x.align-center-middle -->

<?php $this->load->view('footer'); // load footer ?>
