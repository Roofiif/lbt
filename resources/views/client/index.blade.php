@extends('layouts.app')

@section('title', 'Client')

@section('content')

<div class="container">
    <a href="/admin/clients/create" class="btn btn-primary mb-3">Add New</a>
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
                    <th>Logo</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @php
                    $i = 1
                @endphp
                @foreach ($clients as $client)
                <td>{{ $i++ }}</td>
                <td>
                    <img src="/image/{{$client->image}}" alt="" class="img-fluid" width="90">
                </td>
                <td>{{$client->company}}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('clients.destroy', $client->id)}}" method="POST">
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