{{-- resources/views/catalog/edit.blade.php --}}
@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Editar Película</h1>
    <form action="{{ url('/catalog/edit/' . $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')  {{-- El formulario debe usar el método PUT para la edición --}}
        
        {{-- Título --}}
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $pelicula->title }}" required>
        </div>
        
        {{-- Año --}}
        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $pelicula->year }}" required>
        </div>
        
        {{-- Director --}}
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director" value="{{ $pelicula->director }}" required>
        </div>
        
        {{-- Poster --}}
        <div class="form-group">
            <label for="poster">URL del póster</label>
            <input type="text" class="form-control" id="poster" name="poster" value="{{ $pelicula->poster }}" required>
        </div>
        
        {{-- Sinopsis --}}
        <div class="form-group">
            <label for="synopsis">Sinopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="5" required>{{ $pelicula->synopsis }}</textarea>
        </div>

        {{-- Botón para guardar cambios --}}
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ url('/catalog') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
