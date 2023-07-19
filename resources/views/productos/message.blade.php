@extends('layaut/template')

@section('title', 'Crear productos')

@section('contenido')

<main>
    
    <div class="container">
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
            <h5>{{ $msg }}</h5>
            </div>
        </div>
        <a href="{{ url('productos') }}" class="btn btn-info">Volver</a>
    </div>

</main>

@endsection