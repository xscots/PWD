<?php
  $lokasi_file = $_FILES['fupload']['tmp_name']; // Membuat Variabel lokasi_file untuk menampung lokasi sementar dari file yang diupload
  $nama_file = $_FILES['fupload']['name']; // Membuat Variabel nama_file untuk menampung nama dari file yang diupload
  $deskripsi = $_POST['deskripsi']; // Membuat Variabel deskripsi untuk menampung dekripsi dari file yang diupload
  $direktori = "c:/xampp/htdocs/PWD/Kegiatan-1/upload_file/$nama_file"; // Membuat variabel direktori untuk lokasi penyimpanan file yang telah diupload tadi dengan nama_file atau nama dari file yang di upload
  if (move_uploaded_file($lokasi_file, $direktori)) { // Membuat perkondisian pada saat perpindahan dari lokasi sementara kedalam variabel direktori (lokasi yang kita tuju untuk menyimpan file yang diupload)
      echo "Nama File: <b>$nama_file</b> berhasil di upload <br>"; // Jika berhasil akan mengoutputkan Nama dari file yang diupload beserta deskripsinya
      echo "Deskripsi File :<br>$deskripsi";
  } else {
      echo "File gagal diupload"; // Jika Gagal akan ada pemberitahuan bahwa upload filenya gagal
  }
