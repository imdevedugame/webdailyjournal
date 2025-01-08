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
/* Gaya untuk overlay dan efek hover */
.carousel-item .position-relative {
    position: relative;
}

/* Overlay dengan opacity 50% dan teks muncul saat hover */
.carousel-item .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Warna hitam transparan */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.carousel-item:hover .image-overlay {
    opacity: 1;
}

.carousel-item img {
    transition: opacity 0.3s ease;
}

.carousel-item:hover img {
    opacity: 0.5; /* Opacity gambar menjadi 50% saat hover */
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

<section id="gallery" style="background-color: #e9ecef; padding: 60px 0;">
    <h2 class="text-center fw-bold display-6">Gallery</h2>
    
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $sql1 = "SELECT gambar, nama FROM gallery";
            $result = $conn->query($sql1);
            $isActive = 'active'; // Menandakan item pertama yang aktif
            if ($result->num_rows > 0) {
                // Loop melalui hasil query dan tampilkan gambar-gambar
                while($row = $result->fetch_assoc()) {
                    $gambar = $row['gambar'];
                    $nama = $row['nama'];
            ?>
                    <div class="carousel-item <?php echo $isActive; ?>">
                        <div class="d-flex justify-content-center position-relative">
                            <!-- Gambar -->
                            <img src="<?php echo './gambar/' . $gambar; ?>" class="d-block" style="max-width: 90%; height: auto;" alt="Gambar">
                            <!-- Nama Gambar yang tampil saat hover -->
                            <div class="image-overlay text-center">
                                <h3><?php echo $nama; ?></h3>
                            </div>
                        </div>
                    </div>
            <?php
                    $isActive = ''; // Menghilangkan class active pada item selanjutnya
                }
            } else {
                echo "<p>Tidak ada gambar dalam gallery.</p>";
            }
            ?>
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
</section>
        <br><br>
   
      <section id="schedule" class="text-center p-5" style="background-color: #C8CFA0;">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SENIN</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Etika Profesi<br />16.20-18.00 | H.4.4
                </li>
                <li class="list-group-item">
                  Sistem Operasi<br />18.30-21.00 | H.4.8
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SELASA</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pendidikan Kewarganegaraan<br />12.30-13.10 | Kulino
                </li>
                <li class="list-group-item">
                  Probabilitas dan Statistik<br />15.30-18.00 | H.4.9
                </li>
                <li class="list-group-item">
                  Kecerdasan Buatan<br />18.30-21.00 | H.4.11
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">RABU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Manajemen Proyek Teknologi Informasi<br />15.30-18.00 | H.4.6
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">KAMIS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Bahasa Indonesia<br />12.30-14.10 | Kulino
                </li>
                <li class="list-group-item">
                  Pendidikan Agama Islam<br />16.20-18.00 | Kulino
                </li>
                <li class="list-group-item">
                  Penambangan Data<br />18.30-21.00 | H.4.9
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pemrograman Web Lanjut<br />10.20-12.00 | D.2.K
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FREE</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>    
    <section id="hero" style="background-color: #e9ecef; padding: 60px 0;">
        <div class="container text-sm-start">
          <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="https://cloud.jpnn.com/photo/jatim/news/normal/2024/08/13/melalui-teknologi-iot-ppko-doscom-udinus-bantu-tingkatkan-pr-091x.jpg" class="img-fluid me-sm-4" width="300" style="border-radius:15px 50px;" alt="Image description">
            <div class="text-center text-sm-start">
              <h1 class="fw-bold display-2">About Me</h1>
              <h4 class="lead display-7">Nama: Muhammad Ivan Rafsanjani</h4>
                <h4 class="lead display-7">Nim : A11.2023.14933</h4>
               
              <h4 class="lead display-7">Perkenalkan saya ivan saya adalah laki laki yang mencari cinta sejati tapi slelalu gagal dalam hal mencari seseorang yang saya akan    .</h4>
            </div>
          </div>
        </div>
        <br><br><br>
      </section>  
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