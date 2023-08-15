@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

<div class="container">
    <a href="/admin/galeris/create" class="btn btn-primary mb-3">Add New</a>
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif 
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($galeris as $galeri)
                <tr>
                <td>{{ $i++ }}</td>
                <td>
                    <img src="/image/{{$galeri->image}}" alt="" class="img-fluid" width="90">
                </td>
                <td>
                    <a href="{{ route('galeris.edit', $galeri->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('galeris.destroy', $galeri->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger">Hapus</button>
                    </form>
                </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection