@extends('layouts.app')

@section('title', 'Setting')

@section('content')

<div class="container">
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif 
    
        <label for="content">Perubahan</label>
        <!-- <textarea name="tentangKami-content" id="" cols="120" rows="10"></textarea> -->

        <div class="form-group">
            <label for="passwordAdmin">Ubah Logo</label>
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="up-gmb border h-100 d-flex justify-content-center align-items-center flex-column">
                            <img src="/image/upload.png" alt="" srcset="" class="img-upld">
                            <button class="btn btn-primary mt-2" id="uploadButton">Browse</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="setting-perusahaan">
                        <label for="passwordAdmin">Ubah Password Admin</label>
                        <form action="/admin/ubahpassword/2" method="POST">
                            @method('PUT')
                            @csrf
                             <div class="input-group mb-3">
                            <!-- UBAH PASSWORD -->
                               
                                <input type="text" class="form-control" name="password" placeholder="Masukkan Password Baru">
                                <button class="btn btn-primary rounded-start-0 tmb-txt" type="submit" id="button-addon2"> <img src="/image/pencil.png" alt="Pencil" class="pencil"> </button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="setting-perusahaan margin-perusahaan">
                                <label for="namaPerusahaan">Ubah Nama Perusahaan</label>
                                <form action="/admin/ubahNamaPerusahaan/1" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukkan Nama Perusahan">
                                        <button class="btn btn-primary rounded-start-0 tmb-txt" type="submit" id="button-addon2"> <img src="/image/pencil.png" alt="Pencil" class="pencil"> </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <form action="/admin/ubahLogoPerusahaan/1" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="file" name="logo" id="fileInput" class="d-none">
            <p id="mssg" class="m-0"></p>
            <button type="submit" class="btn btn-sm tmb-submit">Update</button>
        </form>
        
    </form>
</div>

<script>
    const uploadButton = document.getElementById('uploadButton');
        const fileInput = document.getElementById('fileInput');
        const mssg = document.getElementById('mssg');

        uploadButton.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (event) => {
            const selectedFile = event.target.files[0];
            
            if (selectedFile) {
                mssg.classList.add('text-success');
                mssg.innerHTML = 'File terpilih: ' + selectedFile.name;
            } 
            // else {
            //     mssg.classList.add('text-danger');
            //     mssg.innerHTML = 'Tidak ada file yang dipilih';
            // }
        });
</script>
@endsection

