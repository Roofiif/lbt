<div class="fabs" onclick="toggleBtn()">
    <div class="action">
        <i class="fa-solid fa-headphones" id="add"></i>
        <i class="fa-solid fa-headphones" id="remove" style="display: none;"></i>
    </div>
    <div class="float">
        <a href="https://wa.me/{{$kontak->wa}}?text=Halo saya ingin bertanya tentang Luar Biasa Teknologi"class="floats" style="background: #2C9E7A ;">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:{{$kontak->telephone}}"class="floats" style="background: #2C9E7A; ">
            <i class="fa fa-phone"></i>
        </a>
        <a href="mailto:{{$kontak->email_rec}}"class="floats" style="background: #2C9E7A;">
            <i class="fa fa-envelope"></i>
        </a>
    </div>
</div>