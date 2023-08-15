@extends('layouts.app')

@section('title', 'About')

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
            <form action="/admin/about/{{$about->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <img src="/image/{{$about->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image Background</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea type="text" cols="30" rows="10" class="form-control" name="description" placeholder="Deskripsi">{{$about->description}}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slogan 1</label>
                    <input type="text" class="form-control" name="slogan1" placeholder="slogan1" value="{{$about->slogan1}}">
                </div>
                @error('slogan1')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slogan 2</label>
                    <input type="text" class="form-control" name="slogan2" placeholder="slogan2" value="{{$about->slogan2}}">
                </div>
                @error('slogan2')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slogan 3</label>
                    <input type="text" class="form-control" name="slogan3" placeholder="slogan3" value="{{$about->slogan3}}">
                </div>
                @error('slogan3')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slogan 4</label>
                    <input type="text" class="form-control" name="slogan4" placeholder="slogan4" value="{{$about->slogan4}}">
                </div>
                @error('slogan4')
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