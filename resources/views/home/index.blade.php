<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/be118125cf.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lbt/beranda/style.css">
     <!-- Logo Title Bar-->
     <link rel="icon" href="{{$perusahaan->logo}}" type="image/x-icon">
     <title>Beranda</title>
</head>
<body>
    <!-- Navbar -->
    <div id="mainNavbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100">
        <div class="container">
          <a class="navbar-brand" href="">
            <img src="{{$perusahaan->logo}}" alt="" width="50" height="50" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="">Beranda</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link "  href="about-us">Tentang Kami</a>
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
    <section id="hero" >
        <div class="container-fluid" style="background-image: url(image/{{$beranda->utama_img}}); background-size: cover; height: 100vh;"> 
            <div class="row">
                <div class="col-12 mt-4 text-center ">
                    <p style=" color: #2C9E7A; font-size: 42px; ">Our Service <br> We Deliver</p>
                    <div class="yellow-hr "></div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row text-center tombol">
            <div class="col-md-4">
                <a href="layanan"><button class="tbl-chld">
                    <div>
                        <img src="lbt/Gambar/analyst.png" alt="">
                        <p class="text-uppercase sub-title">data analyst</p>
                    </div>
                </button></a>
            </div>
            <div class="col-md-4">
                <a href="layanan"><button class="tbl-chld">
                    <div>
                        <img src="lbt/Gambar/cs.png" alt="">
                        <p class="text-uppercase sub-title">Desk Collection</p>
                    </div>
                </button></a>
            </div>
            <div class="col-md-4">
                <a href="layanan"><button class="tbl-chld ">
                    <div>
                        <img src="lbt/Gambar/Data Quality.png" alt="">
                        <p class="text-uppercase sub-title">data checker</p>
                    </div>
                </button></a>
            </div>
        </div>
    </div>
    <div id="aboutus">
        <div class="container position-relative">
            <div class="row">
                <div class="content-image col-md-6">
                    <div class="content-image-elm" style="background-image: url(lbt/Gambar/youngMan.png);"></div>
                </div>
                <div class="content-text col-md-6">
                    <h3>TENTANG KAMI</h3>
                    <div class="yellow-hr-abouts"></div>
                    <P>
                        {{$beranda->desc_ttg}} 
                    </P>
                    <a href="about-us"><button class="readMore">Let's look at more</button></a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="sertif" class="container">
        <div class="row m-3">
            <div class="col text-center">
                <h1 class="sertifikasi">SERTIFIKASI</h1>
                <div class="yellow-hr-sertif "></div>
            </div>  
        </div>
        <div class="row">
            <div class="col text-center w-20">
                <a href="image/{{$beranda->sert_link}}"><img src="image/{{$beranda->sert_logo}}" class="afpi"></a>
                <p>
                    @php
                    $benefitPekerjaan = explode("\n", $beranda->sert_desc);
                    @endphp
                
                    @foreach($benefitPekerjaan as $desc)
                        {{ trim($desc) }}<br>
                    @endforeach
                </p>
                
            </div>
        </div>
    </div>
    <hr>
    <div id="sertif" class="container">
            <div class="row m-3">
                <div class="col text-center">
                    <h1 class="text-uppercase">Diawasi</h1>
                    <div class="yellow-hr-sertif "></div>
                </div>  
            </div>
            <div class="row">
                <div class="col text-center">
                    <img src="image/{{$beranda->awasi_logo}}" class="ojk">
                     <br>
                </div>
            </div>
        <br>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center judul">
                <h1>KLIEN KAMI</h1>
                <div class="yellow-hr-sertif "></div>
            </div>
        </div>
        <div id="section-client" class="row align-items-center justify-content-md-center mb-3">
            <div class="col-12">
                    <div class="swiper-content">
                        <div class="client-list d-flex flex-wrap align-items-center justify-content-md-center">
                            @foreach($client as $index => $client)
                            <div class="client-item">
                                <img src="image/{{$client->image}}" class="img-client" alt="">
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="floating-menu"> @include('inc.floating')</div>
    <footer>
        <div id="halaman-kontak">
            @include('inc.footer')
        </div>
    </footer>
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
