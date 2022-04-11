<?php
session_start();
if (!isset($_SESSION['is_login'])) {
  header('location:../');
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="SMAN 1 Sumber Marga Telang">
  <meta name="author" content="Samsul Bari and Bootstrap Framework">
  <title>SMAN 1 Sumber Marga Telang - Pengumuman Kelulusan</title>
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/img/favicon.ico">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>
  <!-- Begin of Navigations -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
      <a class="navbar-brand" href="">SMAN 1 SMART</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../beranda/#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../beranda/#profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../beranda/#akademik">Akademik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../beranda/#kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../beranda/#tas">SPE-TU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../">Kelulusan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navigations -->
  <!-- Begin of Content -->
  <section class="pengumuman">
    <!-- <div class="text-center mb-3">
      <img src="../assets/img/logo.png" alt="Logo" width="80">
      <h1 class="h4">Sistem Kelulusan Online</h1>
      <h2 class="h5">SMAN 1 Sumber Marga Telang</h2>
    </div> -->
    <div class="container">
      <div class="row p-3 border rounded-3 bg-light">
        <h1 class="h4 pb-4"><i class="bi bi-card-heading"></i> Data Rinci Kelulusan Peserta Didik TP. 2021/2022</h2>
          <hr>
          <div class="col-md-3">
            <img class="d-block mb-4 img-thumbnail" src="../assets/img/siswa/MIPA/<?php echo $_SESSION['foto']; ?>">
            <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
          </div>
          <div class="col-md-9">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <span class="h4">Data Profil Peserta Didik</span>
                <hr>
                <tbody>
                  <tr>
                    <td>Nama Peserta</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['nama_pd']; ?></td>
                  </tr>
                  <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['ttl']; ?></td>
                  </tr>
                  <tr>
                    <td>Nama Orang Tua / Wali</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['nama_ortu']; ?></td>
                  </tr>
                  <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['nis']; ?></td>
                  </tr>
                  <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['username']; ?></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['jk']; ?></td>
                  </tr>
                  <tr>
                    <td>Kelas / Program</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['kelas']; ?> / <?php echo $_SESSION['prodi']; ?> (Matematika dan Ilmu Pengetahuan Alam)</td>
                  </tr>
                  <tr>
                    <td>Tahun Pelajaran</td>
                    <td>:</td>
                    <td>2021/2022</td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <td colspan="3" class="h5">Daftar Nilai Kelompok Umum</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['matematika']; ?></td>
                  </tr>
                  <tr>
                    <td>Bahasa Indonesia</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['b_indonesia']; ?></td>
                  </tr>
                  <tr>
                    <td>Bahasa Inggris</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['b_inggris']; ?></td>
                  </tr>
                  <thead class="mb-2">
                    <tr>
                      <td colspan="3" class="h5">Daftar Nilai Kelompok Peminatan</td>
                    </tr>
                  </thead>
                  <tr>
                    <td>Fisika</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['fisika']; ?></td>
                  </tr>
                  <tr>
                    <td>Kimia</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['kimia']; ?></td>
                  </tr>
                  <tr>
                    <td>Biologi</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['biologi']; ?></td>
                  </tr>
                  <thead>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </thead>
                  <tr class="h6">
                    <td>Nilai Rata-rata Ujian</td>
                    <td>:</td>
                    <td><?php echo $_SESSION['rata_rata']; ?></td>
                  </tr>
                  <tr class="h6">
                    <td>Keterangan</td>
                    <td>:</td>
                    <td class="text-success"><?php echo $_SESSION['keterangan']; ?> </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- /end of .table-responsive -->
          </div> <!-- /end of .col-md-9 -->
          <hr>
          <div class="pt-2 text-center">
            <a href="../assets/downloads/SKL/<?php echo $_SESSION['download']; ?>" class="btn btn-primary btn-md">
              <i class="bi bi-download"></i> Download Surat Keterangan Kelulusan
            </a>
            <a href="../assets/downloads/SKL/<?php echo $_SESSION['download']; ?>" class="btn btn-success btn-md">
              <i class="bi bi-download"></i> Download Poster Kelulusan
            </a>
            <a href="../assets/downloads/SKL/<?php echo $_SESSION['download']; ?>" class="btn btn-danger btn-md">
              <i class="bi bi-download"></i> Download Kartu Pelajar
            </a>
          </div>
      </div> <!-- /end of .row -->
    </div> <!-- end of Container -->
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffd700" fill-opacity="1" d="M0,192L6.2,208C12.3,224,25,256,37,229.3C49.2,203,62,117,74,90.7C86.2,64,98,96,111,96C123.1,96,135,64,148,90.7C160,117,172,203,185,245.3C196.9,288,209,288,222,245.3C233.8,203,246,117,258,96C270.8,75,283,117,295,149.3C307.7,181,320,203,332,229.3C344.6,256,357,288,369,250.7C381.5,213,394,107,406,69.3C418.5,32,431,64,443,101.3C455.4,139,468,181,480,192C492.3,203,505,181,517,160C529.2,139,542,117,554,117.3C566.2,117,578,139,591,165.3C603.1,192,615,224,628,208C640,192,652,128,665,96C676.9,64,689,64,702,96C713.8,128,726,192,738,208C750.8,224,763,192,775,197.3C787.7,203,800,245,812,234.7C824.6,224,837,160,849,149.3C861.5,139,874,181,886,181.3C898.5,181,911,139,923,122.7C935.4,107,948,117,960,144C972.3,171,985,213,997,229.3C1009.2,245,1022,235,1034,192C1046.2,149,1058,75,1071,58.7C1083.1,43,1095,85,1108,112C1120,139,1132,149,1145,181.3C1156.9,213,1169,267,1182,288C1193.8,309,1206,299,1218,266.7C1230.8,235,1243,181,1255,133.3C1267.7,85,1280,43,1292,21.3C1304.6,0,1317,0,1329,32C1341.5,64,1354,128,1366,128C1378.5,128,1391,64,1403,53.3C1415.4,43,1428,85,1434,106.7L1440,128L1440,0L1433.8,0C1427.7,0,1415,0,1403,0C1390.8,0,1378,0,1366,0C1353.8,0,1342,0,1329,0C1316.9,0,1305,0,1292,0C1280,0,1268,0,1255,0C1243.1,0,1231,0,1218,0C1206.2,0,1194,0,1182,0C1169.2,0,1157,0,1145,0C1132.3,0,1120,0,1108,0C1095.4,0,1083,0,1071,0C1058.5,0,1046,0,1034,0C1021.5,0,1009,0,997,0C984.6,0,972,0,960,0C947.7,0,935,0,923,0C910.8,0,898,0,886,0C873.8,0,862,0,849,0C836.9,0,825,0,812,0C800,0,788,0,775,0C763.1,0,751,0,738,0C726.2,0,714,0,702,0C689.2,0,677,0,665,0C652.3,0,640,0,628,0C615.4,0,603,0,591,0C578.5,0,566,0,554,0C541.5,0,529,0,517,0C504.6,0,492,0,480,0C467.7,0,455,0,443,0C430.8,0,418,0,406,0C393.8,0,382,0,369,0C356.9,0,345,0,332,0C320,0,308,0,295,0C283.1,0,271,0,258,0C246.2,0,234,0,222,0C209.2,0,197,0,185,0C172.3,0,160,0,148,0C135.4,0,123,0,111,0C98.5,0,86,0,74,0C61.5,0,49,0,37,0C24.6,0,12,0,6,0L0,0Z"></path>
  </svg>
  <hr>
  <!-- End of Main -->
  <!-- Footer Debug Information + Copyrights -->
  <footer class="text-muted text-center">
    <div class="container">
      <p class="mb-1">
        &copy; Copyright 2016 - <?= date('Y') ?> SMAN 1 Sumber Marga Telang | Develop by
        <a href="https://instagram.com/ariewhitehat" class="text-reset"><span class="text-danger"><i class="bi bi-instagram"></i></span> Samsul Bari</a>
      </p>
      <ul class="list-inline no-margin">
        <li class="list-inline-item">
          <a href="https://my.idcloudhost.com/aff.php?aff=4257" class="text-reset"><i class="bi bi-hdd-rack text-primary"></i> Server</a>
        </li>
        <li class="list-inline-item">
          <a href="https://opsekolah.com" class="text-reset"><i class="bi bi-megaphone text-warning"></i> Support</a>
        </li>
        <li class="list-inline-item">
          <a href="mailto:contact.samsulbari@gmail.com" class="text-reset"><i class="bi bi-bug text-danger"></i> Report Bug</a>
        </li>
        <li class="list-inline-item">
          <p>Version: Beta</p>
        </li>
        <li class="list-inline-item">
          <p>Environment: Development</p>
        </li>
      </ul>
    </div>
  </footer>
  <!-- End of Footer-->
  <!-- Modal -->
  <!-- Full screen modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h4" id="exampleModalFullscreenLabel"><img class="mx-auto" src="../assets/img/Logo.png" width="30" height="40" alt="Icon SMAN 29 Banyuasin"> SMAN 1 SMART</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-5 mt-2 text-center">
            <h4><ins>SURAT KETERANGAN KELULUSAN</ins></h4>
            <span class="h6">No. : 421.3/600/SMAN1SMT/V/2022</span>
          </div>
          <p style="text-align: justify">Yang bertanda tangan dibawah ini, Kepala SMAN 1 Sumber Marga Telang, Kecamatan Sumber Marga Telang, Kabupaten Banyuasin Provinsi Sumatera Selatan menerangkan bahwa :</p>
          <div class="table-responsive mt-2">
            <table class="table table-borderless py-2">
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td>: <?php echo $_SESSION['nama_pd']; ?></td>
                </tr>
                <tr>
                  <td>T.T.L.</td>
                  <td>: <?php echo $_SESSION['ttl']; ?></td>
                </tr>
                <tr>
                  <td>Nama Orang Tua / Wali</td>
                  <td>: <?php echo $_SESSION['nama_ortu']; ?></td>
                </tr>
                <tr>
                  <td>NIS</td>
                  <td>: <?php echo $_SESSION['nis']; ?></td>
                </tr>
                <tr>
                  <td>NISN</td>
                  <td>: <?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                  <td>Kelas / Program</td>
                  <td>: <?php echo $_SESSION['kelas']; ?> / <?php echo $_SESSION['prodi']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-center mb-5">
            <P class="my-3">Dinyatakan :</p>
            <h2 class="mb-3">LULUS / <del>TIDAK LULUS</del></h2>
            <p>dengan Nilai Rata-rata : <?php echo $_SESSION['rata_rata']; ?></p>
          </div>
          <p style="text-align: justify">dari satuan pendidikan berdasarkan kriteria kelulusan dan rapat dewan guru SMAN 1 Sumber Marga Telang pada tanggal 29 April 2022 tahun pelajaran 2021/2022.</p>
          <p style="text-align: justify">Demikian Keterangan Pengumuman Kelulusan ini, agar dapat dipergunakan dengan sebagaimana mestinya.</p>
          <div class="text-center mt-5">
            <img src="../assets/img/ttd-el-nobg.png" width="300" height="150">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal"><i class="bi bi-eye"></i> Lihat Data Rinci Kelulusan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Modal -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/form-validation.js"></script>
  <script>
    $(document).ready(function() {
      setTimeout(function() {
        $('#myModal').modal('show');
      }, 60);
    });
  </script>
</body>

</html>
<!-- Jayalah Indonesiaku  -->