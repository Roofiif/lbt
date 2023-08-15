@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

<div class="container">
    <a href="/admin/layanans/create" class="btn btn-primary mb-3">Add New</a>
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
                    <th>Nama Layanan</th>
                    <th> <center> Deskripsi Layanan </center> </th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @php
                    $i = 1
                @endphp
                @foreach ($layanans as $layanan)
                <td>{{ $i++ }}</td>
                <td>{{$layanan->nama_layanan}}</td>
                <td>{{$layanan->deskripsi_layanan}}</td>
                <td>
                    <a href="{{ route('layanans.edit', $layanan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('layanans.destroy', $layanan->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger">Hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection