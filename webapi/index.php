<?php
  function get_CURL($url)
  {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    

    return json_decode($result, true);

   }

    $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCvh1at6xpV1ytYOAzxmqUsA&key=AIzaSyCrM1rlMAKiaZkxyTjGK-h49dGWzK65pS4')
    ;
    
    $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
    $channelName = $result['items'][0]['snippet']['title'];
    $subscriber = $result['items'][0]['statistics']['subscriberCount'];

    // latest vidio
    $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCrM1rlMAKiaZkxyTjGK-h49dGWzK65pS4&channelId=UCvh1at6xpV1ytYOAzxmqUsA&maxResults=1&order=date&part=snippet';
    $result = get_CURL($urlLatestVideo);
    $latestVideoId = $result['items'][0]['id']['videoId'];

    // rating vidio
    $urlRatingVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCrM1rlMAKiaZkxyTjGK-h49dGWzK65pS4&channelId=UCvh1at6xpV1ytYOAzxmqUsA&maxResults=1&order=rating&part=snippet';
    $result = get_CURL($urlRatingVideo);
    $urlRatingVideo = $result['items'][0]['id']['videoId'];

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>KELOMPOK 6 WEB SERVICE</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Kelompok 6</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Anggota Kelompok</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/profile1.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Kelompok 6</h1>
          <h3 class="lead">WEB SERVICE</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Anggota Kelompok</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <h5>ALDI ISTIYANTO (177006096)<h5>
            <h5>FIKRI MAULANA IKHSAN (177006008)<h5>
            <h5>IKBAR ROZIKIN (177006095)<h5>
            <h5>RISTIANA (177006008)<h5>
            <h5>WINDU RAHAYU (177006093)<h5>

          </div>
          <div class="col-md-5">
            <p>Tugas ini untuk memenuhi mata kuliah web service,agar mahasiswa dapat lebih memahami dan bisa membuat web API</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Youtube -->
    <section class="social bg-light" id="sosial">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>VIDIO TERBARU DAN TRANDING DARI CHANNEL JESS NO LIMIT</h2>
          </div>
        </div>

        <div class="row justify-content-center">

        <div class="col-md-5">
          <div class="row">
          <div class="col-md-4">
          <img src="<?= $youtubeProfilePic; ?>" width="100" class = "rounded-circle"> 
          </div>
          <div class="col-md-8">
          <h5><?= $channelName; ?></h5>
          <p><?= $subscriber; ?> subscribers.</p>
          <div class="g-ytsubscribe" data-channelid="UCvh1at6xpV1ytYOAzxmqUsA" data-layout="default" data-count="default"><br><br>
          </div>
          </div>
          </div>
          <div class="row mt-2 pb-2">
          <div class="col text-center">
          <h3>Video Tranding</h3>
          </div>
          </div>
          <div class="row mt-3 pb-3">
          <div class="col">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $urlRatingVideo; ?>" allowfullscreen></iframe>
          </div>
          </div>
          </div>
          </div>

          


          <div class="col-md-5">
          <div class="row">
          <div class="col-md-4">
          <img src="<?= $youtubeProfilePic; ?>" width="100" class = "rounded-circle"> 
          </div>
          <div class="col-md-8">
          <h5><?= $channelName; ?></h5>
          <p><?= $subscriber; ?> subscribers.</p>
          <div class="g-ytsubscribe" data-channelid="UCvh1at6xpV1ytYOAzxmqUsA" data-layout="default" data-count="default"><br><br>
          </div>
          </div>
          </div>
          <div class="row mt-2 pb-2">
          <div class="col text-center">
          <h3>Video Terkini</h3>
          </div>
          </div>

          <div class="row mt-3 pb-3">
          <div class="col">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" 
          allowfullscreen></iframe>
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>IKLAN</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/7.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><P>LIPUTAN TERKINI</P>warga indonesia sekarang oleh pemerintah di liburkan karena adanya wabah virus corona,tetapi belakangan ini sebagian masyarakan indonesia malah dijadikan kesempatan untuk liburan bersama keluarga</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/8.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><P>BINOMO</P>Jutaan orang tidak menyadari bahwa mereka bisa menghasilkan $1.000 sehari tanpa meninggalkan rumah, dan Anda adalah salah satu dari mereka :v</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><p>BUKALAPAK</p>Dijual cepat leptop merk apple kondisi bagus,garansi masih 2 bulan.harga nego.hubungi ibu widya .alamat jalan jambu permai 10 bogor.081356991004.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/9.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><p>SEPUTAR KESEHATAN</p><br>Memperkuat Sistem Imun<br>
Mau sistem imun tetap prima? Mudah kok, konsumsi saja jahe secara rutin. Jahe banyak mengandung vitamin C dan magnesium. Kandungan ini membuatnya membantu tubuh untuk memperkuat sistem imun. Selain kedua zat tersebut, jahe juga memiliki kandungan gingerols, shogaols, dan zingerones yang dapat berfungsi sebagai antioksidan bagi tubuh.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/10.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><p>MOBILE LEGEND</p>ayo main mobile legend bersama teman kalahkan musuh supaya bisa naik rank
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/11.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"> <br>KESEHATAN<br> Tidur siang yang cukup dapat menyegarkan otak supaya bisa beraktifitas kembali dan badan terasa bugar </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>FORMULIR</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">HUBUNGI KAMI</h5>
                <p class="card-text">jika kalian ingin reques atau komentar tentang web kami dapat mengisi formulir di samping</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Lokasi</h3></li>
              <li class="list-group-item">Universitas Siliwangi</li>
              <li class="list-group-item">Jl. Siliwangi No.24, Kahuripan, Kec. Tawang, Tasikmalaya 46115</li>
              <li class="list-group-item">Jawa Barat, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Nomor telepon</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Pesan</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Kirim pesan</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Universitas Siliwangi</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>