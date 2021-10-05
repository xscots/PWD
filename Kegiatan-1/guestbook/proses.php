<?php
$nama = $_POST['nama']; // Membuat sebuah variabel nama untuk menampung isi dari nama yang ada pada file index.html 
$alamat = $_POST['alamat']; // Membuat sebuah variabel alamt untuk menampung isi dari alamat yang ada pada file index.html 
$email = $_POST['email']; // Membuat sebuah variabel email untuk menampung isi dari email yang ada pada file index.html 
$status = $_POST['status']; // Membuat sebuah variabel status untuk menampung isi dari status yang ada pada file index.html 
$komentar = $_POST['komentar']; // Membuat sebuah variabel komentar untuk menampung isi dari komentar yang ada pada file index.html 
echo "<head><title>My Guest Book</head></title>"; // Menampilkan tulisan My Guest Book
$fp = fopen("guestbook.txt","a+"); // Membuat variabel untuk membuka file guestbook.txt dengan menggunakan fopen, dan mode "a+" untuk membaca / menulis, melanjutkan data jika ada data baru dan tidak akan menghapus data sebelumnya tetapi mempertahankannya
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n"); // fputs berguna untuk meletakkan variabel yang telah di ambil dari index.html kedalam variabel fp yang telah dibuat dan menuju kepada file "guestbook.txt", dan akan di tulis di dalam file guestbook.txt itu sendiri
fclose($fp); // Untuk menutup file yang telah kita buka tadi dengan fungsi fclose
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=index.html> Isi Buku Tamu </a><br>";
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
