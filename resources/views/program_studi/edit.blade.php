@extends('adminlte::page')

@section('title', 'Edit Program Studi')

@section('content_header')
    <h1>Edit Program Studi</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Program Studi</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('program-studi.update', $programStudi->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="kode_prodi">Kode Program Studi:</label>
                                <input type="text" class="form-control @error('kode_prodi') is-invalid @enderror" id="kode_prodi" name="kode_prodi" value="{{ old('kode_prodi', $programStudi->kode_prodi) }}" required>
                                @error('kode_prodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama_prodi">Nama Program Studi:</label>
                                <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" name="nama_prodi" value="{{ old('nama_prodi', $programStudi->nama_prodi) }}" required>
                                @error('nama_prodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kode_fakultas">Fakultas:</label>
                                <select class="form-control @error('kode_fakultas') is-invalid @enderror" id="kode_fakultas" name="kode_fakultas" required>
                                    @foreach($fakultas as $fak)
                                        <option value="{{ $fak->id }}" {{ old('kode_fakultas', $programStudi->kode_fakultas) == $fak->id ? 'selected' : '' }}>
                                            {{ $fak->nama_fakultas }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kode_fakultas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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
