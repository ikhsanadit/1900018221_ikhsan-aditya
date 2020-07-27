<?php
  require 'up.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Upload Gambar</title>
  <link rel="icon" href="images/isan.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body class="bg-dark text-dark">
  <!-- Navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(20, 20, 45)">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="about.php">About</a>
        <a class="nav-item nav-link" href="open.php">Gallery</a>
        <a class="nav-item nav-link" href="contact.php">Contact</a>
        <a class="nav-item nav-link active" href="#upload">Upload</a>
        
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- Upload -->
  
  <section id="upload" class="m-4 bg-white">
    <div class="container">
      <div class="row mt-4">
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>
      </div>
      <div class="row mb-4">
            <div class="col text-center mt-5">
                <h2>Let's Connect</h2>
            </div>
        </div>
            <div class="row mx-auto">
                <div class="col-3">
                    <a href="https://www.facebook.com/ikhsan.aditya.108">
                        <img src="images/fb.png" class="sosmed rounded mx-auto d-block" title="Facebook">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://twitter.com/isann_08">
                        <img src="images/tw.png" class="sosmed rounded mx-auto d-block" title="Twitter">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://www.instagram.com/isann_08/">
                        <img src="images/ig.png" class="sosmed rounded mx-auto d-block" title="Instagram">
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://www.youtube.com/channel/UCtm-SKBCRxgOtQtcGwKSzwwl">
                        <img src="images/yt.png" class="sosmed rounded mx-auto d-block" title="Youtube">
                    </a>
                </div>
            </div>
      </div>
    </div>
  </section>
  <!-- Akhir Upload -->
  
  <!-- Footer -->
  <footer class="py-3" style="background-color: rgb(20, 20, 45);">
    <div class="container">
      <div class="row">
        <a href="#about">
          <button class="btn btn-dark mt-button">
            <svg preserveAspectRatio="none" height="20" width="10" viewBox="0 0 100 100">
              <path d="M50 25 L0 75 L100 75 Z" fill="white" stroke="white"></path>
            </svg>
          </button>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-end">
        <div class="col text-white text-center py-3 mt-2">
          <p class="my-0">Ikhsan Aditya &copy2019|| made by &hearts;</p>
        </div>
      </div>
    </div>
  </footer>
 

</body>

</html>