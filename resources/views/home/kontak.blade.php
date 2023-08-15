<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/be118125cf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="lbt/Kontak/style.css" type="text/css">
    <link rel="icon" href="{{$perusahaan->logo}}" type="image/x-icon">
    <title>Kontak Kami</title>
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
                <a class="nav-link"  href="karir">Karir</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
      <!-- End Nav Bar-->
    
    <div id="hero">
       <div class="container-fluid">
          <img src="lbt/Gambar/kontak.png" alt="costumerService" class="position-relative img-hero">
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
