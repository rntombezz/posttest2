<?php
// pastikan tidak ada output sebelum session_start
// atau sebelum setiap tag <?php di file PHP
session_start();

// validasi form dan set $_SESSION
// ...

// periksa apakah $_SESSION telah didefinisikan sebelum digunakan
if (isset($_SESSION['nama'])) {
    // tampilkan pesan sambutan
   
    $name = $_SESSION['nama'];
  

} else {
    // tampilkan pesan kesalahan jika $_SESSION belum diatur
    echo "Mohon masuk terlebih dahulu.";
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>postest 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">hallo bang<span><?php $name = $_SESSION['nama'];

echo " $name!"; ?></span></h2>


      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/utama.js"></script>
  </body>
</html>