@extends('layaut/template')

@section('title', 'Listar productos')

@section('contenido')

<div class="container">
    <div class="thin-panel">
        <div class="d-flex justify-content-between">
            <div>
                <h5>Editar producto</h5>
            </div>
            <div>
                <a href="{{ url('productos') }}" class="btn btn-info">Volver</a>
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

        <form action="{{ url('productos/'.$producto->id) }}" method="post">

            @method("PUT")
            @csrf

            <input type="hidden" name="id" value="{{ $producto->id }}"/>

            <div class="form-group">
            <label for="nombre_producto">Nombre Producto</label>
            <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" value="{{ $producto->nombre_producto }}" required>
            </div>

            <div class="form-group">
            <label for="direccion">Referencia</label>
            <input type="text" name="referencia" class="form-control" id="referencia" value="{{ $producto->referencia }}" required>
            </div>

            <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" id="precio" value="{{ $producto->precio }}" min="0" pattern="^[0-9]+" required>
            </div>
            
            <div class="form-group">
            <label for="peso">Peso</label>
            <input type="number" name="peso" class="form-control" id="peso" value="{{ $producto->peso }}" min="0" pattern="^[0-9]+" required>
            </div>

            <div class="form-group">
            <label for="Categoria">Categoria</label>
            <input type="text" name="categoria" class="form-control" id="categoria" value="{{ $producto->categoria }}" required>
            </div>

            <div class="form-group">
            <label for="fecha">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" value="{{ $producto->stock }}" min="0" pattern="^[0-9]+" required>
            </div>

            <div class="form-group">
            <label for="fecha_creacion">Fecha Creacion</label>
            <input type="date" name="fecha_creacion" class="form-control" id="fecha_creacion" value="{{ $producto->fecha_creacion }}" required>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Editar producto</button>
        </form>
    </div> 
</div>

@endsection