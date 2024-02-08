<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

</head>

<body class="<?= $background ?> mt-2">
  <?php
  if ($navbar === true) {
    echo $this->include("templates/siswa/navbar");
  }
  ?>
  <?= $this->renderSection("content"); ?>

  <!-- Script Pemutaran Musik -->
  <script>
    $(document).ready(function() {
      // Inisialisasi objek Audio dan memulai pemutaran musik otomatis
      var audioElement = new Audio("<?= base_url(); ?>/music/backsound.mp3");
      audioElement.loop = true; // Mengatur agar musik diputar secara berulang
      audioElement.play(); // Memulai pemutaran musik
    });
  </script>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <!-- Your Custom Script -->
  <script src="<?= base_url(); ?>/js/script.js"></script>
</body>

</html>