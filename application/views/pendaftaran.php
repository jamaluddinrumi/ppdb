<div class="grid-container pendaftaran section">
  <div class="grid-x grid-margin-x grid-padding-x">
    <div class="cell large-12">
      <h1 class="text-center section-title">PENDAFTARAN</h1>
      <?php
      $attributes = array('class' => 'siswa', 'id' => 'siswa');
      echo form_open('pendaftaran/kirim');
      ?>

      <div class="grid-x grid-margin-x">

        <div class="cell large-6">
          <h5>A. IDENTITAS PESERTA DIDIK</h5>
<?php

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

<?php

// nama

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

<?php

// asal sekolah

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

// tempat lahir

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Tempat Lahir', 'tempat_lahir', $attributes);

$data = array(
        'name'          => 'tempat_lahir',
        'id'            => 'tempat_lahir',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required'
);

echo form_input($data);

// tanggal lahir

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Tanggal Lahir', 'tanggal_lahir', $attributes);

$data = array(
        'type' => 'date',
        'name'          => 'tanggal_lahir',
        'id'            => 'tanggal_lahir',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required'
);

echo form_input($data);

// alamat di yogyakarta

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Alamat di Yogyakarta', 'alamat_di_yogyakarta', $attributes);

$data = array(
        'name'          => 'alamat_di_yogyakarta',
        'id'            => 'alamat_di_yogyakarta',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'rows'  => '5',
        'style'         => '',
        'required'   => 'required'
);

echo form_textarea($data);

// alamat asal

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Alamat Asal', 'alamat_asal', $attributes);

$data = array(
        'name'          => 'alamat_asal',
        'id'            => 'alamat_asal',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'rows'  => '5',
        'style'         => '',
        'required'   => 'required'
);

echo form_textarea($data);

// jenis_kelamin

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Jenis Kelamin', 'jenis_kelamin', $attributes);

$laki_laki = array(
    'name' => 'jenis_kelamin',
    'value' => 'laki-laki',
    'checked' => TRUE,
    'id' => 'laki-laki'
);

$perempuan = array(
    'name' => 'jenis_kelamin',
    'value' => 'perempuan',
    'id' => 'perempuan'
);

?>
<div class="grid-x">
  <div class="cell large-6">
    <?php echo form_radio($laki_laki, 'checked'); echo form_label("Laki-Laki", 'laki-laki'); ?>
  </div>
  <div class="cell large-6">
    <?php echo form_radio($perempuan); echo form_label("Perempuan", 'perempuan'); ?>
  </div>
</div>
<?php

// agama

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Agama', 'agama', $attributes);

$data = array(
    'name' => 'agama',
    'id' => 'agama'
);

$options = array(
        'islam'         => 'Islam',
        'kristen'           => 'Kristen',
        'katolik'         => 'Katolik',
        'hindu'        => 'Hindu',
        'buddha'        => 'Buddha',
);

echo form_dropdown('agama', $options, 'islam');

?>
        </div><!-- .cell .large-6 -->

        <div class="cell large-6">
          <h5>B. IDENTITAS ORANG TUA</h5>
        <?php

        ?>

        <?php

        // nama orangtua

        $attributes = array(
        'class' => '',
        'style' => ''
        );

        echo form_label('Nama Orang Tua', 'nama_orangtua', $attributes);

        $data = array(
        'name'          => 'nama_orangtua',
        'id'            => 'nama_orangtua',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required'
        );

        echo form_input($data);
        ?>

        <?php

        // alamat oragtua

        $attributes = array(
        'class' => '',
        'style' => ''
        );

        echo form_label('Alamat', 'alamat_orangtua', $attributes);

        $data = array(
        'name'          => 'alamat_orangtua',
        'id'            => 'alamat_orangtua',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'rows'  => '5',
        'style'         => '',
        'required'   => 'required'
        );

        echo form_textarea($data);

        // agama orangtua

        $attributes = array(
        'class' => '',
        'style' => ''
        );

        echo form_label('Agama', 'agama_orangtua', $attributes);

        $options = array(
        'islam'         => 'Islam',
        'kristen'           => 'Kristen',
        'katolik'         => 'Katolik',
        'hindu'        => 'Hindu',
        'buddha'        => 'Buddha',
        );

        echo form_dropdown('agama_orangtua', $options, 'islam');

        //pekerjaan

        $attributes = array(
                'class' => '',
                'style' => ''
        );

        echo form_label('Pekerjaan', 'pekerjaan_orangtua', $attributes);

        $data = array(
                'name'          => 'pekerjaan_orangtua',
                'id'            => 'pekerjaan_orangtua',
                'value'         => '',
                'maxlength'     => '100',
                'size'          => '50',
                'style'         => '',
                'required'   => 'required'
        );

        echo form_input($data);

        //pekerjaan

        $attributes = array(
                'class' => '',
                'style' => ''
        );

        echo form_label('Nama Wali', 'nama_wali', $attributes);

        $data = array(
                'name'          => 'nama_wali',
                'id'            => 'nama_wali',
                'value'         => '',
                'maxlength'     => '100',
                'size'          => '50',
                'style'         => '',
                'required'   => 'required'
        );

        echo form_input($data);

        // alamat di yogyakarta

        $attributes = array(
                'class' => '',
                'style' => ''
        );

        echo form_label('Alamat di Yogyakarta', 'alamat_di_yogyakarta_orangtua', $attributes);

        $data = array(
                'name'          => 'alamat_di_yogyakarta_orangtua',
                'id'            => 'alamat_di_yogyakarta_orangtua',
                'value'         => '',
                'maxlength'     => '100',
                'size'          => '50',
                'rows'  => '5',
                'style'         => '',
                'required'   => 'required'
        );

        echo form_textarea($data);

        ?>
        </div><!-- .cell .large-6 -->
      </div><!-- .grid-x -->

      <div class="grid-x grid-margin-x">
        <div class="cell large-6">
          <h5>C. ASAL SEKOLAH</h5>
<?php
//nisn

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Nama Sekolah', 'nama_sekolah', $attributes);

$data = array(
        'name'          => 'nama_sekolah',
        'id'            => 'nama_sekolah',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => '',
        'required'   => 'required'
);

echo form_input($data);

// alamat sekolah

$attributes = array(
        'class' => '',
        'style' => ''
);

echo form_label('Alamat Sekolah', 'alamat_sekolah', $attributes);

$data = array(
        'name'          => 'alamat_sekolah',
        'id'            => 'alamat_sekolah',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '50',
        'rows'  => '5',
        'style'         => '',
        'required'   => 'required'
);

echo form_textarea($data);

?>
        </div><!-- .cell .large-6 -->

          <div class="cell large-6">
            <h5>D. NILAI UJIAN NASIONAL</h5>

            <table>
              <tr>
                <th>No.</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Ujian Nasional</th>
              </tr>
              <tr>
                <td>1.</td>
                <td>Bahasa Indonesia</td>
                <td><?php echo form_input('nilai_bahasa_indonesia'); ?></td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Bahasa Inggris</td>
                <td><?php echo form_input('nilai_bahasa_inggris'); ?></td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Matematika</td>
                <td><?php echo form_input('nilai_matematika'); ?></td>
              </tr>
              <tr>
                <td>4.</td>
                <td>IPA</td>
                <td><?php echo form_input('nilai_ipa'); ?></td>
              </tr>
              <tr>
                <td colspan="2">Jumlah</td>
                <td><?php echo form_input('nilai_total_ujian'); ?></td>
              </tr>
            </table>
          </div><!-- .cell .large-6 -->

          </div><!-- .grid-x -->

          <div class="grid-x">
            <div class="cell large-12">
              <h5>E. PRESTASI NON AKADEMIS ( Olah Raga, Seni, Kreativitas, dan mendapat surat rekomendasi dari Dinas Pendidikan Kabupaten/Kota)</h5>
              <ol>
                <li><?php echo form_input('prestasi_non_akademis_1'); ?></li>
                <li><?php echo form_input('prestasi_non_akademis_2'); ?></li>
              </ol>
            </div>
          </div>

          <?php
          $ipa = array(
              'name' => 'peminatan',
              'value' => 'ipa',
              'checked' => TRUE,
              'id' => 'ipa'
          );

          $ips = array(
              'name' => 'peminatan',
              'value' => 'ipa',
              'id' => 'ips'
          );
          ?>

          <div class="grid-x">
            <div class="cell large-4">
              <h5>F. PEMINATAN</h5>
            </div>
            <div class="cell large-4">
              <?php echo form_radio($ipa, 'checked'); echo form_label("Ilmu Pengetahuan Alam (iPA)", 'ipa'); ?>
            </div>
            <div class="cell large-4">
              <?php echo form_radio($ips); echo form_label("Ilmu Pengetahuan Sosial (IPS)", 'ips'); ?>
            </div>
          </div>

<div class="grid-x">
  <div class="cell larga-12 text-center">
    <?php
    $attributes = array('class' => 'submit button primary shadow rounded whatsapp teal', 'id' => 'submit');
    echo form_submit('siswa', 'KIRIM', $attributes);
    ?>

    <?php echo form_close(); ?>
  </div>
</div>

    </div>
  </div>
</div>
