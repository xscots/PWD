<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload File</title> // Menampilkan Teks "Upload File"
</head>

<body>
  <form enctype="multipart/form-data" method="post" action="upload.php"> // Sebuah form dengan method post yang menujukan pada saat di submit ke file upload.php
    File yang diupload: <input type="file" name="fupload"><br> // Sebagai tempat input untuk file yang ingin di upload
    Deskripsi File: <br><textarea name="deskripsi" rows="6" cols="20"></textarea><br> // Sebagai deskripsi dari file yang di upload
    <input type=submit value=Upload> // Untuk memberi data atau file yang telah di upload ke file upload.php
  </form>

  <br>
  <a href="download.php">Klik Untuk Download</a> // Sebuah fungsi anchor untuk direct link ke file download.php

</body>

</html>