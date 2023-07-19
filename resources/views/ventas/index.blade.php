@extends('layaut/template')

@section('title', 'Listar productos')

@section('contenido')

<main>
    
    <div class="container">
        <h5>Listado de productos</h5>
        <br>
        <br>
        <table class="table table-bordered grocery-crud-table table-hover">
            <thead class="table-dark">
                <tr>
                    <td>Id</td>
                    <td>Nombre Producto</td>
                    <td>Referencia</td>
                    <td>Precio</td>
                    <td>Peso</td>
                    <td>Categoria</td>
                    <td>Stock</td>
                    <td>Fecha Creacion</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>

                @foreach($listaProductos as $value)

                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->nombre_producto }}</td>
                    <td>{{ $value->referencia }}</td>
                    <td>{{ $value->precio }}</td>
                    <td>{{ $value->peso }}</td>
                    <td>{{ $value->categoria }}</td>
                    <td>{{ $value->stock }}</td>
                    <td>{{ $value->fecha_creacion }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('ventas/'.$value->id.'/edit') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Iniciar venta</a>
                    </td>
                </tr>

                @endforeach
                
            </tbody>
        </table>


    </div>
</main>

@endsection