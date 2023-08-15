<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Style Css-->
     <script src="https://kit.fontawesome.com/be118125cf.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="lbt/Karir/style.css" type="text/css">
    <title>Karir</title>
    <link rel="icon" href="{{$perusahaan->logo}}" type="image/x-icon">
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
              <a class="nav-link" href="about-us">Tentang Kami</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link"  href="layanan">Layanan</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="">Karir</a>
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
    <!-- Career-->
    <div id="pic">
      <div class="image-container">
        <div>
          <img src="lbt/Gambar/carier.jpg" alt="" class="position-relative top-0 z-1 img-hero">
        </div>
      </div> 
    </div>
    <div id="list">
      <div class="box m-4">
        <div class="row my-4">
          <div class="col-12 text-center">
            <h2 class="judul text-uppercase">Karir</h2>
            @foreach($karir as $index => $pekerjaan)
              <div class="inner-box">
                <div class="row my-3">
                  <div class="col">
                      <h2>{{ $pekerjaan->nama_pekerjaan }}</h2>
                  </div>
                  <div class="col text-center justify-content-center align-content-center">
                    <a href="{{ route('apply.showBySlug', ['position' => $pekerjaan->slug]) }}"><button class="btn">Apply Now</button></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <footer>
        <div id="halaman-kontak">
            @include('inc.footer')
        </div>
    </footer>
    <div id="floating-menu"> @include('inc.floating')</div>
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