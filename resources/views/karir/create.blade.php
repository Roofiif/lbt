@extends('layouts.app')

@section('title', 'Karir')

@section('content')

<div class="container">
    <a href="/admin/karirs" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('karirs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Pekerjaan</label>
                    <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama Pekerjaan">
                </div>
                @error('nama_pekerjaan')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Job Requirment</label>
                    <textarea type="text" cols="30" rows="10" class="form-control" name="job_requirment" placeholder="Job Requirment"></textarea>
                </div>
                @error('job_requirment')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi Pekerjaan</label>
                    <textarea name="deskripsi_pekerjaan" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Pekerjaan"></textarea>
                </div>
                @error('deskripsi_pekerjaan')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Salary</label>
                    <input type="text" class="form-control" name="salary" placeholder="Salary">
                </div>
                @error('salary')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Benefit</label>
                    <textarea type="text" cols="30" rows="10" class="form-control" name="benefit" placeholder="Benefit"></textarea>
                </div>
                @error('benefit')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Link Google Form</label>
                    <input type="text" class="form-control" name="linkgf" placeholder="Link Google Form">
                </div>
                @error('linkgf')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Fulltime / Magang</label>
                    <select name="fulltime_magang" id="" class="form-control" >
                        <option value=""></option>
                        <option value="Fulltime">Fulltime</option>
                        <option value="Magang">Magang</option>
                    </select>
                </div>
                @error('fulltime_magang')
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