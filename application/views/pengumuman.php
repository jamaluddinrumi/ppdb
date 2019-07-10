<div class="grid-container pengumuman section">
  <div class="grid-x grid-margin-x grid-padding-x">
    <div class="cell large-12">
      <h1 class="text-center section-title">PENGUMUMAN</h1>
      <table>
  <thead>
    <tr>
      <th width="">No.</th>
      <th width="">NISN</th>
      <th width="">Nama Lengkap</th>
      <th width="">Asal Sekolah</th>
      <th width="">Diterima/Tidak</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($semua_siswa as $siswa): ?>
      <tr>
        <td><?php echo $siswa['id']; ?></td>
        <td><?php echo $siswa['nisn']; ?></td>
        <td><?php echo $siswa['nama']; ?></td>
        <td><?php echo $siswa['asal_sekolah']; ?></td>
        <td><?php echo $siswa['diterima'] ? 'Diterima' : 'Tidak'; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
  </div>
</div>
