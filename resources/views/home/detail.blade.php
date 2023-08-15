<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/be118125cf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('lbt/Lanjutan Karir/style.css') }}" type="text/css">
    <title>{{$pekerjaan->nama_pekerjaan}}</title>
    <link rel="icon" href="{{ asset($perusahaan->logo) }}" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <div id="floating-menu"> </div>
    <div id="mainNavbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100">
        <div class="container">
          <a class="navbar-brand" href="../">
            <img src="{{ asset($perusahaan->logo) }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-3">
                <a class="nav-link" href="../">Beranda</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="../about-us">Tentang Kami</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link"  href="../layanan">Layanan</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="/karir">Karir</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="../contact-us">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
      <!-- End Nav Bar-->
      
    <!-- Desc-->
    <section id="body" style='background-image: url("/lbt/Gambar/background.png");'>
        <div class="container" >
            <div class="row">
                <div class="col">
                    <h2>{{$pekerjaan->nama_pekerjaan}} ({{$pekerjaan->fulltime_magang}})</h2>
                    <h3>Syarat Pekerjaan:</h3>
                    <h4>
                    <ol>
                            @php
                            $syaratPekerjaan = explode("\n", $pekerjaan->job_requirment);
                            @endphp
                        
                            @foreach($syaratPekerjaan as $syarat)
                                <li>{{ trim($syarat) }}</li>
                            @endforeach
                        </ol>
                    </h4>
                    <h3>Job Description:</h3>
                    <h4>
                        <ol>
                            @php
                            $deskPekerjaan = explode("\n", $pekerjaan->deskripsi_pekerjaan);
                            @endphp
                        
                            @foreach($deskPekerjaan as $desk)
                                <li>{{ trim($desk) }}</li>
                            @endforeach
                        </ol>
                    </h4>
                    <h3>Salary:</h3>
                        <h4>{{$pekerjaan->salary}}</h4>  
                    <h3>Benefit:</h3>
                    <h4>
                        <ol>
                            @php
                            $benefitPekerjaan = explode("\n", $pekerjaan->benefit);
                            @endphp
                        
                            @foreach($benefitPekerjaan as $benefit)
                                <li>{{ trim($benefit) }}</li>
                            @endforeach
                        </ol>
                    </h4>
                </div>
                <div class="row justify-content-center mb-3 mt-2">
                    <button class="btn"><a href="{{$pekerjaan->linkgf}}">
                        <svg viewBox="0 0 180 60" class="border">
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                            </svg>
                        <span>Kirim Form</span>
                        </a>
                    </button>
                </div> 
            </div>
        </div>
    </section>

    <!-- End Desc-->
    <!-- Footer-->
    <footer>
        <div id="halaman-kontak">
          @include('inc.footer')
        </div>
    </footer>
    <!-- End Footer-->
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