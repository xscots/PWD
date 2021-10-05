<?php
$filecounter="counter.txt"; // Membuat variabel filecounter dengan berisikan counter.txt untuk dapat memanggil file counter.txt
$fileload=fopen($filecounter,"r+"); // Membuat variabel fileload untuk membuka file counter.txt dengan fungsi fopen, dengan mode r+ yaitu untuk membaca dan menulis di awal file
$hit=fread($fileload,filesize($filecounter)); // Membuat variabel hit untuk membaca fileload, dan menggunakan fungsi filesize untuk mengembalikan ukuran file dari counter.txt

echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>"); // Untuk membuat garis atau kotak biru pada website dengan lebar 250
echo("<td width=250 valign=middle align=center>"); // Untuk membuat teks berada di tengah dan dengan lebar 250
echo("<font face=verdana size=2 color=#FF0000><b>"); // Untuk merubah font menjadi verdana dengan size 2 dan color atau warna merah
echo("Anda pengunjung yang ke:"); // Mengeluarkan tulisan "Anda pengunjung yang ke : "
echo($hit); // Memanggil variabel hit pada line ke 4
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
fclose($fileload); // Setelah kita membuka file pada line ke 3 menggunakan fungsi fopen, jangan lupa untuk menutup proses atau filenya kembali dengan fclose

$fl=fopen($filecounter,"w+"); // Membuat variabel fl untuk membuka kembali filecounter (counter.txt), dengan mode w+ yaitu baca/tulis, membuka dan memotong file atau membuat file baru jika tidak ada file yang dituju
$hit=$hit+1; // Variabel Hit disini berguna untuk menambahkan sebanyak 1 pada saat setiap website di refresh atau dibuka
fwrite($fl,$hit,strlen($hit)); // fwrite disini bertugas untuk menulis variabel hit pada counter.txt, dan strlen merupakan panjang dari variabel hit
fclose($fl); // Kemudian jangan lupa untuk di tutup kembali dengan fclose