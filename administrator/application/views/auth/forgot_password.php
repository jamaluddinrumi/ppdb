<?php $this->load->view('header'); // load header ?>

    <div class="grid-x align-center-middle" style="height: 100vh;" style="visibility: none;" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600" data-aos-easing="linear">

    <div class="cell medium-12 logo-cell">
      <div class="grid-x align-center">
        <object class="" data="<?php echo base_url(); ?>assets/image/muga logo admin.svg" type="image/svg+xml">
          <img src="<?php echo base_url(); ?>assets/image/muga logo header.png" />
        </object>
      </div><!-- .grid-x.align-center -->
    </div><!-- .cell -->

    <h1 class="title text-center"><?php echo lang('forgot_password_heading');?></h1>

    <div class="cell medium-12 info-message-cell">
      <div class="grid-x align-center">
        <div id="infoMessage" class="text-center animated shake faster"><?php echo $message;?></div>
      </div><!-- .grid-x.align-center -->
    </div><!-- .cell -->


<div  class="cell medium-12 form-cell">

<div class="grid-x align-center form-container">

<div id="forgot-password-form" class="form-wrapper cell medium-4 large-3">

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<?php echo form_input($identity, '', 'placeholder=email');?>
      </p>

      <?php $attributes = array('class' => 'button expanded', 'id' => 'submit'); ?>
      <p class="form-submit-container text-center"><?php echo form_submit('submit', lang('forgot_password_submit_btn'), $attributes);?></p>

<?php echo form_close();?>

</div><!-- #form-forgot-password-wrapper -->

</div><!-- .grid-x -->

</div><!-- #forgot-password-cell-container -->

<div class="cell medium-12 login-cell">
  <div class="grid-x align-center">
    <div id="login-instead-cell-container" class="form-footer cell medium-4 large-3">
      <p class="text-center"><a href="login"><?php echo lang('login_submit_btn');?>?</a></p>
    </div>
  </div>
</div><!--. cell -->

</div><!-- .grid-x.align-center-middle -->

<?php $this->load->view('footer'); // load footer ?>
