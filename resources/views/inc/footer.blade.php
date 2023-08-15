<hr>
    <div class="kontak-tentang">
        <a href="/about-us"> <p class="tentang">Tentang Kami</p> </a>
        <a href="/contact-us"> <p class="kontak">Kontak Kami</p> </a>
    </div>

    <div class="container alamat-perusahaan">
        <div class="row">
            <div class="col">
                <p class="perusahaan">{{$perusahaan->nama_perusahaan}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="alamat">{{$kontak->alamat}}</p>
            </div>
        </div>
    </div>
    <div class="peta text-center align-content-center">
        <iframe src="https://www.google.com/maps/embed?pb={{$kontak->maps_embed}}" class="img-peta" width="650" height="355" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="sosmed">
        <a href="{{$kontak->linkedin}}"> <img src="{{ asset('lbt/Gambar/linkedin.png') }}" alt="linkedin" class="ikon"> </a>
    </div>

    <hr>

    <div class="phone-mail">
        <img src="{{ asset('lbt/Gambar/phone.png') }}" alt="phone" class="ikon">{{$kontak->telephone}}</img>
        <img src="{{ asset('lbt/Gambar/mail.png') }}" alt="mail" class="ikon">{{$kontak->email_pt}}</img>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
