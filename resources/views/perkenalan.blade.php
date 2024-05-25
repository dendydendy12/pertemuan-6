<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perkenalan Diri</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <h1>Perkenalan Diri</h1>
  </header>

  <section class="biodata">
    <?php
      // Data diri
      $nama = "Dendy";
      $asal_sekolah = "SMK Al Hafidz Leuwiliang";
      $hobi = ["Membaca", "ngedit", "mendengarkan musik"];
      $motohidup = "Aku adalah aku, selalu optimis dalam hal apapun";

      // Menampilkan data diri
      echo "<p>Nama: " . $nama . "</p>";
      echo "<p>Asal Sekolah: " . $asal_sekolah . "</p>";
      echo "<p>Hobi: ";
      foreach ($hobi as $h) {
        echo $h . ", ";
      }
      echo "</p>";
      echo "<p>Moto Hidup: " . $motohidup . "</p>";
    ?>
  </section>

  <footer>
    <p>&copy; 2024dndyy</p>
  </footer>
</body>
</html>
