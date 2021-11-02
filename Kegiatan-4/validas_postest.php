<html>
<head>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <?php
  // define variables and set to empty values
  $namaErr = $nimErr = $emailErr = $genderErr = $prodiErr = $alamatErr = "";
  $nama = $nim = $email = $gender = $prodi = $alamat = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
      $namaErr = "Nama harus diisi";
    } else {
      $nama = test_input($_POST["nama"]);
    }
    if (empty($_POST["email"])) {
      $emailErr = "Email harus diisi";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email tidak sesuai format";
      }
    }
    if (empty($_POST["nim"])) {
      $nimErr = "NIM harus diisi";
    } else {
      $nim = test_input($_POST["nim"]);
    }
    if (empty($_POST["prodi"])) {
      $prodiErr = "Prodi harus diisi";
    } else {
      $prodi = test_input($_POST["prodi"]);
    }
    if (empty($_POST["alamat"])) {
      $alamatErr = "Alamat harus diisi";
    } else {
      $alamat = test_input($_POST["alamat"]);
    }
    if (empty($_POST["gender"])) {
      $genderErr = "Gender harus dipilih";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <h2>Data Mahasiswa</h2>
  <p><span class="error">* Harus Diisi.</span></p>
  <form method="post" action="<?php
                              echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
      <tr>
        <td>Nama:</td>
        <td><input type="text" name="nama">
          <span class="error">* <?php echo $namaErr; ?></span>
        </td>
      </tr>
      <tr>
        <td>NIM: </td>
        <td><input type="text" name="nim">
          <span class="error">* <?php echo $nimErr; ?></span>
        </td>
      </tr>
      <tr>
        <td>Prodi:</td>
        <td> <input type="text" name="prodi">
          <span class="error"><?php echo $prodiErr; ?></span>
        </td>
      </tr>
      <tr>
        <td>E-Mail:</td>
        <td> <input type="text" name="email">
          <span class="error"><?php echo $emailErr; ?></span>
      </tr>
      <tr>
        <td>Alamat:</td>
        <td> <input type="text" name="alamat">
          <span class="error"><?php echo $alamatErr; ?></span>
      </tr>
      <tr>
        <td>Gender:</td>
        <td>
          <input type="radio" name="gender" value="L">Laki-Laki
          <input type="radio" name="gender" value="P">Perempuan
          <span class="error">* <?php echo $genderErr; ?></span>
        </td>
      </tr>
      <td>
        <input type="submit" name="submit" value="Submit">
      </td>
    </table>
  </form>
  <table width='80%' border=1>
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Program Studi</th>
      <th>E-Mail</th>
      <th>Alamat</th>
      <th>Gender</th>
    </tr>
    <?php
    if (isset($_POST['submit'])) {
      echo "<tr>";
      echo "<td>" . $_POST['nama'] . "</td>";
      echo "<td>" . $_POST['nim'] . "</td>";
      echo "<td>" . $_POST['prodi'] . "</td>";
      echo "<td>" . $_POST['email'] . "</td>";
      echo "<td>" . $_POST['alamat'] . "</td>";
      echo "<td>" . $_POST['gender'] . "</td>";
    }
    ?>
  </table>
</body>

</html>