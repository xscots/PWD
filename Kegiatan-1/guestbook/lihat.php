<?php
echo "<head><title>My Guest Book</title></head>"; // Membuat tulisan "My Guest Book" untuk ditampilkan
$fp = fopen("guestbook.txt","r"); // Membuat variabel fp untuk membuka file "guestbook.txt" dengan menggunakan fungsi fopen, dan mode r untuk hanya membaca file saja
echo "<table border=0>"; // Membuat tabel tetapi tidak ada garis karena border = 0
while ($isi = fgets($fp,80)) // Membuat sebuah perulangan dengan mendeklarasikan variabel isi yang memiliki fungsi fgets(mengambil) variabel fp dan memiliki batas sebanyak 80
{
  $pisah = explode("|",$isi); // Membuat variabel pisah dengan fungsi explode untuk mengubah suatu text atau kalimat yang terdiri dari kata-kata menjadi sebuah array berdasarkan separator atau tanda pemisah pada kalimat tersebut
  echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; // Data nama yang akan ditampilkan pada website
  echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>"; // Data alamat yang akan ditampilkan pada website
  echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>"; // Data email yang akan ditampilkan pada website
  echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>"; // Data status yang akan ditampilkan pada website
  echo "<tr><td>Komentar </td><td>: $pisah[4]</td></tr> 
  <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; // Data Komentar yang akan ditampilkan pada website
}
echo "</table>";
echo "<a href=index.html> Klik Disini </a>Isi Form Buku Tamu"; // Membuat sebuah anchor atau direct link untuk kembali mengisi