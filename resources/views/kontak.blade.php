@extends('layouts.app')

@section('title', 'Kontak')

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
            <form action="/admin/kontak/{{$kontak->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <img src="/image/{{$kontak->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image Background</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nomer Wa</label>
                    <input type="text" class="form-control" name="wa" placeholder="Nomer Wa" value="{{$kontak->wa}}"></textarea>
                </div>
                @error('wa')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Nomor Telephone</label>
                    <input type="text" class="form-control" name="telephone" placeholder="Nomor Telephone" value="{{$kontak->telephone}}">
                </div>
                @error('telephone')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea type="text" cols="30" rows="10" class="form-control" name="alamat" placeholder="Alamat">{{$kontak->alamat}}</textarea>
                </div>
                @error('alamat')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email PT</label>
                    <input type="text" class="form-control" name="email_pt" placeholder="Email PT" value="{{$kontak->email_pt}}">
                </div>
                @error('email_pt')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Email Recruitment</label>
                    <input type="text" class="form-control" name="email_rec" placeholder="Email Recruitment" value="{{$kontak->email_rec}}">
                </div>
                @error('email_rec')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="Linkedin" value="{{$kontak->linkedin}}">
                </div>
                @error('linkedin')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea cols="30" rows="10" type="text" class="form-control" name="maps_embed" placeholder="Maps Embed">{{$kontak->maps_embed}}</textarea>
                </div>
                @error('maps_embed')
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