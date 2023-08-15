@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

<div class="container">
    <a href="/admin/layanans" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('layanans.update' , $layanan->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Nama Layanan</label>
                    <input type="text" class="form-control" name="nama_layanan" placeholder="Nama Layanan" value="{{$layanan->nama_layanan}}">
                </div>
                @error('nama_layanan')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Layanan</label>
                    <textarea name="deskripsi_layanan" id="" cols="20" rows="10" class="form-control" placeholder="Deskripsi Layanan">{{$layanan->deskripsi_layanan}}
                    </textarea>
                </div>
                @error('deskripsi_layanan')
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