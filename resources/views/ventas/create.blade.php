@extends('layaut/template')

@section('title', 'Crear ventas')

@section('contenido')

<div class="container">
    <div class="thin-panel">
        <div class="d-flex justify-content-between">
            <div>
                <h5>Vender producto</h5>
            </div>
            <div>
                <a href="{{ url('ventas') }}" class="btn btn-info">Volver</a>
            </div>
        </div>
        <hr/>

        @if($errors->any())

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <form action="{{ url('ventas') }}" method="post">

            @csrf

            <input type="hidden" name="id" value="{{ $producto->id }}"/>
            <input type="hidden" name="stock" value="{{ $producto->stock }}"/>
            <input type="hidden" name="nombre_producto" value="{{ $producto->nombre_producto }}"/>

            <table class="table table-bordered grocery-crud-table">
            <thead class="table-dark">
                <tr>
                    <td>Nombre Producto</td>
                    <td>Stock</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $producto->nombre_producto }}</td>
                    <td>{{ $producto->stock }}</td>
                </tr>
            </tbody>
            </table>

            <div class="form-group">
            <label for="cantidad">Cantidad a vender</label>
            <input type="number" name="cantidad" class="form-control" id="cantidad" min="1" pattern="^[0-9]+" required>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Vender producto</button>
        </form>
    </div> 
</div>

@endsection