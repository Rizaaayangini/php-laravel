@extends('adminlte::page')

@section('title', 'Edit Fakultas')

@section('content_header')
    <h1>Edit Fakultas</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Fakultas</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('fakultas.update', $fakulta->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="nama_fakultas">Nama Fakultas:</label>
                                <input type="text" class="form-control @error('nama_fakultas') is-invalid @enderror" id="nama_fakultas" name="nama_fakultas" value="{{ old('nama_fakultas', $fakulta->nama_fakultas) }}" required>
                                @error('nama_fakultas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="pimpinan_fakultas">Pimpinan Fakultas:</label>
                                <input type="text" class="form-control @error('pimpinan_fakultas') is-invalid @enderror" id="pimpinan_fakultas" name="pimpinan_fakultas" value="{{ old('pimpinan_fakultas', $fakulta->pimpinan_fakultas) }}" required>
                                @error('pimpinan_fakultas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .card {
            margin-top: 20px;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
