<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="path/to/dist/feather.js"></script>
    <style>
    .social-icons a {
        text-decoration: none; /* Menghilangkan garis bawah */
        outline: none; /* Menghilangkan outline saat diklik */
        border: none; /* Menghilangkan border */
    }

    .social-icons a:focus {
        outline: none; /* Menghilangkan outline saat fokus */
    }

@media (max-width: 768px) {
    .display-2 {
        font-size: 2rem;
    }
    .display-6 {
        font-size: 1.5rem;
    }
}

@media (max-width: 576px) {
    #hero {
        padding: 30px 0;
    }
}

.responsive-iframe {
    position: relative;
    padding-bottom: 56.25%; /* Rasio aspek 16:9 */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #000;
}

.responsive-iframe iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.log-out {
  background-color: green; /* Warna hijau */
  color: white; /* Warna teks putih */
  border: none; /* Hilangkan border default */
  padding: 6px 12px; /* Spasi di dalam tombol */
  font-size: 14px; /* Ukuran font */
  border-radius: 8px; /* Membuat sudut membulat */
  cursor: pointer; /* Mengubah kursor menjadi pointer saat dihover */
  transition: transform 0.2s, background-color 0.2s; /* Efek transisi */
}

/* Efek hover */
.log-out:hover {
  background-color: darkgreen; /* Warna hijau lebih gelap saat dihover */
}

/* Efek klik */
.log-out:active {
  transform: scale(0.95); /* Tombol sedikit mengecil saat diklik */
}


</style>

    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- navigation section -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Daily Jurnal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#article">Article</a>
              </li>
                  <li class="nav-item">
                      <a class="nav-link text-dark" href="login.php"><button class="log-out"> login </button></a>
                    </li>
            </ul>
          </div>
        </div>
      </nav>
      


    <!-- hero section -->
    <section id="hero" style="background-color: #e9ecef; padding: 60px 0;">
        <div class="container text-sm-start">
          <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="./gambar/06e71435913eb02d5b0474db57871740.jpg" class="img-fluid me-sm-4" width="300" alt="Image description">
            <div class="text-center text-sm-start">
              <h1 class="fw-bold display-2">Manchester United</h1>
              <h4 class="lead display-7">Gambar ini menunjukkan momen ikonik ketika para pemain Manchester United merayakan kemenangan mereka dengan mengangkat trofi Liga Premier Inggris (EPL).
                 Dengan senyum dan sorak sorai, para pemain berkumpul di sekitar kapten yang memegang piala tinggi di atas kepala, 
                simbol keberhasilan mereka dalam mencapai puncak kompetisi liga.</h4>
            </div>
          </div>
        </div>
        <br><br><br>
      </section>      

    <!-- article section -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="gambar/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- gallery section -->
    <section id="gallery"  style="background-color: #e9ecef; padding: 60px 0;">
        <h2 class="text-center fw-bold display-6">Gallery</h2>
        
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Item Pertama -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/06e71435913eb02d5b0474db57871740.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 1">
                    </div>
                </div>
                <!-- Item Kedua -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/333ebb95b7f1774b49fc1b34fa9b26de.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 2">
                    </div>
                </div>
                <!-- Item Ketiga -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/37d50fe09448fa3b795a7f19166afd2b.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 3">
                    </div>
                </div>
                <!-- Item Keempat -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/39ce2c2fa7a86965d8663e766b70a8ab.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 4">
                    </div>
                </div>
                <!-- Item Kelima -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/69ec278e6869eeb8a187a2fbde43a056.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 5">
                    </div>
                </div>
                <!-- Item Keenam -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/b8563131f893fe4979a9d1b9d978e5a0.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 6">
                    </div>
                </div>
                <!-- Item Ketujuh -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/cf2220dd9d36b0589c346ce11dd7700f.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 7">
                    </div>
                </div>
                <!-- Item Kedelapan -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/f030332428b77eb21f417aca5abdced7.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 8">
                    </div>
                </div>
                <!-- Item Kesembilan -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/f129ded9dc88bde9ae734ad627ad8cce.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 9">
                    </div>
                </div>
                <!-- Item Kesepuluh -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <img src="./gambar/f5df9af8497d3fd7493499011ff63a65.jpg" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar 10">
                    </div>
                </div>
            </div>
            
            <!-- Kontrol Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>
    
        <div class="video text-center">
            <h2><b>-Video-</b></h2>
            <div class="responsive-iframe">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JuRD8gSdmps?si=fde7JAePqzXtS7y9" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        
    </section>
    
    <!-- footer -->
    <footer class="bg-light text-center p-3">
        <div class="social-icons">
            <a href="https://www.instagram.com/imvanz_" class="h2 p-2 text-dark" target="_blank">
                <i class="bi bi-instagram"></i> <!-- Gunakan ikon dari Bootstrap Icons -->
            </a>
            <a href="https://twitter.com" class="h2 p-2 text-dark" target="_blank">
                <i class="bi bi-twitter"></i> <!-- Gunakan ikon dari Bootstrap Icons -->
            </a>
            <a href="https://wa.me/6287700313085" class="h2 p-2 text-dark" target="_blank">
                <i class="bi bi-whatsapp"></i> <!-- Gunakan ikon dari Bootstrap Icons -->
            </a>
        </div>
        <div class="copyright text-dark mt-2">
            <p>&copy; 2024 Daily Jurnal. Muhammad Ivan Rafsanjani.</p>
        </div>
    </footer>
</body>
</html>