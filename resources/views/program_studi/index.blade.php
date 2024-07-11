@extends('adminlte::page')

@section('title', 'Program Studi')

@section('content_header')
    <h1>Program Studi</h1>
@stop

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <a href="{{ route('program-studi.create') }}" class="btn btn-primary">Tambah Program Studi</a>
            </div>
        </div>
        <div class="row">
            @foreach ($prodi as $item)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $item->nama_prodi }}</h3>
                        </div>
                        <div class="card-body">
                            <p><strong>Kode Prodi:</strong> {{ $item->kode_prodi }}</p>
                            <p><strong>Nama Fakultas:</strong> {{ $item->fakultas ? $item->fakultas->nama_fakultas : 'N/A' }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('program-studi.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('program-studi.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
