<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/be118125cf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="lbt/Layanan/style.css">
    <title>Layanan</title>
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
              <a class="nav-link active" aria-current="page" href="">Layanan</a>
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

    <!-- Service-->
    <div id="hero" >
      <div class="container-fluid" style="background-color: #2C9E7A; background-size: cover; height: 70vh;">
        <div class="row">
          <div class="col-12 mt-4 text-center ">
              <p>Our Service <br> We Deliver</p>
              <div class="yellow-hr "></div>
          </div>
      </div> 
      </div>
    </div>
    @foreach($layanan as $index => $layananItem)
      @if($index % 2 == 0)
      <div id="content" class="container-fluid">
          <div class="row text-center tombol">
              <div class="col-md-4">
                  <div class="tbl-chld">
                    <div class="row py-3">
                        <h2 class="text-center text-uppercase">{{ $layananItem->nama_layanan }}</h2>
                    </div>
                    <div class="row px-3">
                        <p class="text-center">{{$layananItem->deskripsi_layanan }}</p>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="hero" >
        <div class="container-fluid" style=" background-size: cover; height: 70vh;"> 
        </div>
      </div>
      @else
      <div id="content2" class="container-fluid">
          <div class="row text-center tombol2">
              <div class="col-md-4">
                <div class="tbl-chld2">
                  <div class="row py-3">
                      <h2 class="text-center text-uppercase">{{ $layananItem->nama_layanan }}</h2>
                  </div>
                  <div class="row px-3">
                      <p class="text-center">{{$layananItem->deskripsi_layanan }}</p>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div id="hero" >
        <div class="container-fluid" style="background-color: #2C9E7A; background-size: cover; height: 70vh;"> 
        </div>
      </div>
      @endif
    @endforeach
    <!-- End Service-->

    <!-- Footer-->
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