@extends('adminlte::page')

@section('title', 'Fakultas')

@section('content_header')
    <h1>Fakultas</h1>
@stop

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="{{ route('fakultas.create') }}" class="btn btn-primary">Tambah Fakultas</a>
            </div>
        </div>
        <div class="row">
            @foreach ($fakultas as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $item->nama_fakultas }}</h3>
                        </div>
                        <div class="card-body">
                            <p><strong>ID:</strong> {{ $item->id }}</p>
                            <p><strong>Pimpinan Fakultas:</strong> {{ $item->pimpinan_fakultas }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('fakultas.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
