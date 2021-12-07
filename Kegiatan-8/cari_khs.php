<?php
include 'koneksi.php';
?>
<h3>Form Pencarian DATA KHS Dengan PHP </h3>
<form action="" method="get">
  <label>Cari :</label>
  <input type="text" name="cari">
  <input type="submit" value="Cari">
</form>
<?php
if (isset($_GET['cari'])) {
  $cari = $_GET['cari'];
  echo "<b>Hasil pencarian : " . $cari . "</b></b>";
}
?>
<table border="1">
  <tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Kode MK</th>
    <th>Mata Kuliah</th>
    <th>Nilai</th>
  </tr>
  <?php
  if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $sql = "SELECT khs.nim, mahasiswa.nama, khs.kodemk, khs.namamk, khs.nilai FROM khs INNER JOIN mahasiswa ON khs.nim = mahasiswa.nim WHERE khs.nim LIKE '%" . $cari . "%'";
    $tampil = mysqli_query($con, $sql);
  } else {
    $sql = "SELECT khs.nim, mahasiswa.nama, khs.kodemk, khs.namamk, khs.nilai FROM khs INNER JOIN mahasiswa ON khs.nim = mahasiswa.nim";
    $tampil = mysqli_query($con, $sql);
  }
  $no = 1;
  while ($r = mysqli_fetch_array($tampil)) {
  ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $r['nim']; ?></td>
      <td><?php echo $r['nama']; ?></td>
      <td><?php echo $r['kodemk']; ?></td>
      <td><?php echo $r['namamk']; ?></td>
      <td><?php echo $r['nilai']; ?></td>
    </tr>
  <?php } ?>
</table>