<div class="grid-container pendaftaran section">
  <div class="grid-x grid-margin-x grid-padding-x">
    <div class="cell large-12">
      <h1 class="text-center section-title">PENDAFTARAN</h1>
      <?php
      $attributes = array('class' => 'siswa', 'id' => 'siswa');
      echo form_open('pendaftaran/kirim');
      ?>

      <div class="grid-x">
        <div class="cell large-6">
<?php
//nisn

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('NISN', 'nisn', $attributes);

$data = array(
        'name'          => 'nisn',
        'id'            => 'nisn',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required',
        'type'          => 'number'
);

echo form_input($data);
?>
        </div>
      </div>

      <div class="grid-x">
        <div class="cell large-6">
<?php
//nisn

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Nama', 'nama', $attributes);

$data = array(
        'name'          => 'nama',
        'id'            => 'nama',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required'
);

echo form_input($data);
?>
        </div>
      </div>

      <div class="grid-x">
        <div class="cell large-6">
<?php
//nisn

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Asal Sekolah', 'asal_sekolah', $attributes);

$data = array(
        'name'          => 'asal_sekolah',
        'id'            => 'asal_sekolah',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required'
);

echo form_input($data);
?>
        </div>
      </div>

      <?php
      $attributes = array('class' => 'submit button primary shadow whatsapp teal', 'id' => 'submit');
      echo form_submit('siswa', 'KIRIM', $attributes);
      ?>

      <?php echo form_close(); ?>
    </div>
  </div>
</div>
