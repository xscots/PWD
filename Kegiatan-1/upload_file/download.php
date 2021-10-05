<?php
$myDir = "c:/xampp/htdocs/PWD/Kegiatan-1/upload_file/"; // Membuat variabel myDir untuk lokasi folder
$dir = opendir($myDir); // Variabel dir untuk membuka direktori yang dituju pada variabel myDir
echo "Isi folder (klik link untuk download : <br>"; // Untuk ouput tulisan pada website
while($tmp = readdir($dir)){ // Sebuah perulangan untuk menampilkan isi dari direktori yang tadi dituju dengan menggunakan readdir($dir) untuk membaca file apa saja yang terdapat pada folder yang dituju
  echo "<a href='$tmp' target='_blank'>$tmp</a><br>"; // Untuk mengoutputkan file - file yang terdapat pada folder tersebut agar bisa di download
}
closedir($dir); // Dan jangan lupa untuk menutupnya setelah membukanya