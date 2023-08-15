<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/be118125cf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <!-- Font Google-->

    <!-- Style Css-->
    <link rel="stylesheet" href="lbt/Tentang Kami/style.css" type="text/css">
    <link rel="stylesheet" href="lbt/Floating/style.css"type="text/css">

    <!-- Logo Title Bar-->

    <link rel="icon" href="{{$perusahaan->logo}}" type="image/x-icon">

    <title>About Us</title>
  </head>
  <body>
    <!-- Navbar -->

    <div id="mainNavbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100">
      <div class="container">
        <a class="navbar-brand" href="./">
          <img src="{{$perusahaan->logo}}" alt="" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-3">
              <a class="nav-link" href="./">Beranda</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="">Tentang Kami</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link"  href="layanan">Layanan</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link"  href="karir">Karir</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="contact-us">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
    <!-- End Nav Bar-->

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
          <img src="image/{{$about->image}}" alt="" class="position-relative top-0 z-1 img-hero h-100">
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about">
      <div class="container">
          <div class="row my-4">
            <div class="col-12 text-center">
              <h2 class="judul text-uppercase">Tentang Kami</h2>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-12 text text-center">
              <span class="sub-title">{{$about->description}}</span>
            </div>
          </div>
      </div>
    </section>

    <!-- GALERI -->

    <section id="galeri">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="judul-galeri m-3 text-uppercase">Galeri</h2>
          </div>
        </div>
      </div>
      </div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="slide 3"></button>
          </div>
          <div class="carousel-inner">
          @foreach($galeri as $index => $galeri)
            <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
              <a href="image/{{$galeri->image}}"class="image-link">
                <img src="image/{{$galeri->image}}" class="d-block w-100 carousel-img" alt="">
              </a>
            </div>
          @endforeach
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="z-index: 2;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next" style="z-index: 2;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>       
    </section>
    <hr class="hr-antara ">

    <!-- SLOGAN -->
    <section id="slogan">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="judul-slogan text-uppercase">SLOGAN</h2>
            <div class="yellow-hr"></div> 
          </div>
        </div>
        <div class="row m-2">
          <div class="col-md-6">
            <div class="card-slogan">
                <h2>{{$about->slogan1}}</h2>
            </div>
          </div>
          <div class="small-screen-line"></div>
          <div class="col-md-6">
            <div class="card-slogan">
                <h2>{{$about->slogan2}}</h2>
            </div>
          </div>
        </div>
        <div class="small-screen-line"></div>
        <div class="row m-2">
          <div class="col-md-6">
            <div class="card-slogan">
                <h2>{{$about->slogan3}}</h2>
            </div>
          </div>
          <div class="small-screen-line"></div>
          <div class="col-md-6">
            <div class="card-slogan">
                <h2>{{$about->slogan4}}</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="vertical-line"></div>
            </div>
            <div class="col-md-6">
              <div class="horizontal-line"></div>
            </div>
        </div>
    </div>
    </section>
    <div id="floating-menu"> @include('inc.floating')</div>
    <!-- end slogan -->
    <footer>
        <div id="halaman-kontak">
            @include('inc.footer')
        </div>
    </footer>
  <!-- BaguetteBox JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.js"></script>

  <script>
    // Jalankan BaguetteBox
    baguetteBox.run('.image-link', {
      animation: 'fadeIn', // Efek animasi ketika membuka lbt/gambar
      noScrollbars: true // Menonaktifkan bilah scroll ketika galeri dibuka
    });
  </script>

  </body>
</html>
<script>
  function toggleBtn() {
    const Btns = document.querySelector(".float");
    const add = document.getElementById("add");
    const remove = document.getElementById("remove");
    const btn = document.querySelector(".float").querySelectorAll("a");
    Btns.classList.toggle("open");
    if (Btns.classList.contains("open")) {
    remove.style.display = "block";
    add.style.display = "none";
    btn.forEach((e, i) => {
        setTimeout(() => {
        bottom = 40 * i;
        e.style.bottom = bottom + "px";
        console.log(e);
        }, 100 * i);
    });
    } else {
    add.style.display = "block";
    remove.style.display = "none";
    btn.forEach((e, i) => {
        e.style.bottom = "0px";
    });
    }
}
</script>