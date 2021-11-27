<!DOCTYPE html>
<html>
    <!-- Meta i uvod -->
<title>ACR E-Bike</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="text/css">
</head>

<!-- Zaglavlje i navigacija -->

<header>
    <nav class="navbar navbar-expand-sm bg-black fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand  text-white" href="#"><span>ACR E-Bike</span>
      <img src="images/acrbikelogo2.png" alt="ACR E-Bike" style="width:50px;" class="rounded-pill navbar-text">
    </a>
      <ul class="navbar-nav">
      <li class="navbar-item">
        <a class="nav-link text-white" href="#">HOME</a>
      </li>
      <li class="nav-item" id=home>
        <a class="nav-link text-white " href="#servis">PODRŠKA</a>
      </li>
      <li class="nav-item">
      <div class="dropdown">
  <a class="btn btn-black dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    PONUDA
  </a><ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">E-Scooter</a></li>
    <li><a class="dropdown-item" href="#">E-Bike</a></li>
    <li><a class="dropdown-item" href="#">Dodatna oprema</a></li>
  </ul>
      </li>
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="#">GALERIJA</a>
</li>
<li class="nav-item">
          <a class="nav-link text-white" href="#">O NAMA</a>
</li>
    </ul>
  </div>
</header>

<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pro2-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DUCATI Pro II Plus</h5>
        <p>Elegancija i zabava</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/pro3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DUCATI Pro III</h5>
        <p>Napredna tehnologija</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/corseairvelika.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-white">
        <h5>DUCATI CORSE AIR</h5>
        <p>Zabava čak i za najmlađe</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">PRETHODNA</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">SLEDEĆA</span>
  </button>
</div>
<div class="container-sm text-center mt-5 pt-5 bg-black text-light">
    <p><h2>ACR GROUP u saradnji sa M.T. Distribution S.r.l. Urban predstavlja</h2></p><p> Folding e-bikes and electric scooters are produced under license by M.T. Distribution S.r.l.
Urban travel is a particularly topical issue and sustainable transport is a growing trend. Ducati meets these new market needs by signing a license agreement with M.T. Distribution S.r.l., an Italian company already present in the sector for over 40 years, for the development and distribution of different models including folding e-bikes and electric scooters.
The proposal is divided into three brands Ducati, Ducati Corse and Scrambler Ducati and is designed for those who want to move around the city with style and originality.
During the development of the products, special attention was paid to the design, curated by the Ducati Design Centre: the result is an innovative collection with an attractive design.</p>
</div>
<div class="row mt-5 pt-5 bg-black">
  <div class="col-md-4">
    <div class="card bg-black text-light">
      <div class="card-body text-center" data-mdb-animation-on-scroll="repeat">
        <h5 class="card-title">DUCATI Pro II Plus</h5>
        <p class="card-text">To je stvar ukusa!</p>
        <img class="card-img-bottom btn btn-black" src="images/1pro2.jpg" data-bs-toggle="modal" data-bs-target="#myModal">
        </div>
    </div>
  </div>
  <div class="col-md-4">
  <div class="card bg-black text-light">
      <div class="card-body text-center">
        <h5 class="card-title">DUCATI Pro II Plus</h5>
        <p class="card-text">Vrhunski dizajn</p>
        <img class="card-img-bottom btn btn-black" src="images/pro2.jpg" data-bs-toggle="modal" data-bs-target="#myModal2">
      </div>
    </div>
  </div>
  <div class="col-md-4">
  <div class="card bg-black text-light">
      <div class="card-body text-center">
        <h5 class="card-title">DUCATI Pro II Plus</h5>
        <p class="card-text">Nije sve u ubrzanju, ima nešto i u kočenju</p>
        <img class="card-img-bottom btn btn-black" src="images/2pro2.jpg" data-bs-toggle="modal" data-bs-target="#myModal3">
        </div>
</div>
  </div>

  <!-- SERVIS -->

  <div class="container-fluid text-center mt-5 pt-5 bg-black text-light" id="servis"><h2>SERVIS</h2>
  <div class="row mt-5 pt-5 bg-black">
  <div class="col-md-3">
    <div class="card bg-black text-light">
      <div class="card-body text-center" data-mdb-animation-on-scroll="repeat">
        <h5 class="card-title">SRBIJA</h5>
        <img class="card-img-bottom btn btn-black" src="images/pro1evow.png" data-bs-toggle="modal" data-bs-target="#modalSRB">
        </div>
    </div>
  </div>
  <div class="col-md-3">
  <div class="card bg-black text-light">
      <div class="card-body text-center">
        <h5 class="card-title">BOSNA I HERCEGOVINA</h5>
        <img class="card-img-bottom btn btn-black" src="images/pro1evob.png" data-bs-toggle="modal" data-bs-target="#modalBA">
      </div>
    </div>
  </div>
  <div class="col-md-3">
  <div class="card bg-black text-light">
      <div class="card-body text-center">
        <h5 class="card-title">HRVATSKA</h5>
        <img class="card-img-bottom btn btn-black" src="images/scramblercross.png" data-bs-toggle="modal" data-bs-target="#modalHR">
        </div>
</div>
  </div>
  <div class="col-md-3">
  <div class="card bg-black text-light">
      <div class="card-body text-center">
        <h5 class="card-title">CRNA GORA</h5>
        <img class="card-img-bottom btn btn-black" src="images/corseair.png" data-bs-toggle="modal" data-bs-target="#modalCG">
</div>
</div>
</div>
</div>
<br>
<div class="row mt-5 pt-5 bg-black">
  <div class="col-md-6">
    <div class="card bg-black text-light">
      <div class="card-body text-center" data-mdb-animation-on-scroll="repeat">
        <h5 class="card-title">FAQ/Često postavljena pitanja</h5>
        <a href="acrfaq.php"><img class="card-img-bottom btn btn-black w-50" src="images/corseair.png"></a>
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card bg-black text-light">
      <div class="card-body text-center" data-mdb-animation-on-scroll="repeat">
        <h5 class="card-title">Korisnička uputstva</h5>
        <img class="card-img-bottom btn btn-black w-50" src="images/catalog.png" data-bs-toggle="modal" data-bs-target="#modalUPUTE">
        </div>
    </div>
  </div>
</body>

<footer>
<div class="container-fluid text-center mt-5 pt-5 bg-black text-light">
  <p><p>Powered by ©ACR GROUP 2021-<?php echo date("Y");?> All rights reserved</p></p>
</foter>


 <!-- MODAL -->
 <div class="modal fade center" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <img src="images/1pro2.jpg" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div class="modal fade center" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <img src="images/pro2.jpg" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div class="modal fade center" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <img src="images/2pro2.jpg" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div class="modal fade center" id="modalkafa">
  <div class="modal-dialog">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <img src="images/slajd1.png" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div class="modal fade center" id="modalpice">
  <div class="modal-dialog">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <img src="images/slajd1.png" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div class="modal fade center" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <img src="images/1pro2.jpg" class="img-responsive">
      </div>
    </div>
  </div>
</div>


<div class="modal fade center" id="modalSRB">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">OVLAŠTENI SERVIS</h5>
      </div>
      <div class="modal-body text-center">
        <img src="images/wecarelogo.png">
        <h3>We Care</h3>
        <p>Obrenovački drum 3, Beograd</p>
        <p>Kontakt telefon: 011-4500-200</p>
        <p>E -mail: info@korisnickapodrska.com</p>
        <p>Radno vreme:</p>
        <p>Pon - Pet: 09:00-18:00</p>
        <p>Subota: 09:00-14:00</p>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Zatvori</button>
</div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade center" id="modalBA">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title-center" id="exampleModalLabel">OVLAŠTENI SERVIS</h5>
      </div>
      <div class="modal-body text-center">
        <img src="images/ebikelogo.png">
        <h3>E-Bike centar</h3>
        <p>Brčanska 17 A, Sarajevo 71000</p>
        <p>Kontakt telefon:+38733744591</p>
        <p>E -mail: info@ebike.ba</p>
        <p>Radno vrijeme:</p>
        <p>Pon - Pet: 09:00-18:00</p>
        <p>Subota: 09:00-14:00</p>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade center" id="modalHR">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title-center" id="exampleModalLabel">OVLAŠTENI SERVIS</h5>
      </div>
      <div class="modal-body">
        <h3>E-Bike centar</h3>
        <p>Brčanska 17 A, Sarajevo 71000</p>
        <p>Kontakt telefon:+38733744591</p>
        <p>E -mail: info@ebike.ba</p>
        <p>Radno vrijeme:</p>
        <p>Pon - Pet: 09:00-18:00</p>
        <p>Subota: 09:00-14:00</p>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade center" id="modalCG">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">OVLAŠTENI SERVIS</h5>
      </div>
      <div class="modal-body text-center">
        <img src="images/gpslogo.png">
        <h3>GPS centar</h3>
        <p>Bulevar Save Kovačevica 74, 81000 Podgorica</p>
        <p>Kontakt telefon: +38220513446</p>
        <p>E -mail: info@.gpscentar.me</p>
        <p>Radno vrijeme:</p>
        <p>Pon - Pet: 09:00-22:00</p>
        <p>Subota: 09:00-22:00</p>
        <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
</div>
