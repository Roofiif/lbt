@extends('layouts.app')

@section('title', 'Karir')

@section('content')

<div class="container">
    <a href="/admin/karirs/create" class="btn btn-primary mb-3">Add New</a>
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
                    <th>Nama Pekerjaan</th>
                    <th>Job Requirment</th>
                    <th>Deskripsi Pekerjaan</th>
                    <th>Salary</th>
                    <th>Benefit</th>
                    <th>Link Google Form</th>
                    <th>Fulltime / Magang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @php
                    $i = 1
                @endphp
                @foreach ($karirs as $karir)
                <td>{{ $i++ }}</td>
                <td>{{$karir->nama_pekerjaan}}</td>
                <td>{{$karir->job_requirment}}</td>
                <td>{{$karir->deskripsi_pekerjaan}}</td>
                <td>{{$karir->salary}}</td>
                <td>{{$karir->benefit}}</td>
                <td>{{$karir->linkgf}}</td>
                <td>{{$karir->fulltime_magang}}</td>
                <td>
                    <a href="{{ route('karirs.edit', $karir->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('karirs.destroy', $karir->id)}}" method="POST">
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