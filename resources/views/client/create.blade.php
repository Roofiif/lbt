@extends('layouts.app')

@section('title', 'Client')

@section('content')

<div class="container">
    <a href="/admin/clients" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" class="form-control" name="image" accept="image/*">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Company</label>
                    <input type="text" class="form-control" name="company" placeholder="Company">
                </div>
                @error('company')
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