@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{$message}}</p>
                </div>
            @endif  
            <form action="/admin/beranda/{{$beranda->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <img src="/image/{{$beranda->utama_img}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image Background</label>
                    <input type="file" class="form-control" name="utama_img">
                </div>
                @error('utama_img')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Tentang Kami</label>
                    <textarea type="text" cols="30" rows="10" class="form-control" name="desc_ttg" placeholder="Deskripsi">{{$beranda->desc_ttg}}</textarea>
                </div>
                @error('desc_ttg')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$beranda->sert_logo}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image Sertifikat</label>
                    <input type="file" class="form-control" name="sert_logo">
                </div>
                @error('sert_logo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Sertifikat Link</label>
                    <input type="text" class="form-control" name="sert_link" placeholder="sertifikat link" value="{{$beranda->sert_link}}">
                </div>
                @error('sert_link')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nomor Sertifikat</label>
                    <textarea type="text" cols="20" rows="5" class="form-control" name="sert_desc" placeholder="sertifikat nomor">{{$beranda->sert_desc}}</textarea>
                </div>
                @error('sert_desc')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$beranda->awasi_logo}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image Diawasi</label>
                    <input type="file" class="form-control" name="awasi_logo">
                </div>
                @error('awasi_logo')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection