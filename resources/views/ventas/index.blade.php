@extends('layouts.app')

@section('content')
    <h3 class="page-title">Ventas</h3>

    <p>
        <a href="{{ route('ventas.create') }}" class="btn btn-success">Registrar</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($ventas) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Correo Comprador</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($ventas) > 0)
                        @foreach ($ventas as $venta)
                            <tr data-entry-id="{{ $venta->id }}">
                                <td></td>
                                <td>{{ $venta->descripcion }}</td>
                                <td>{{ $venta->precio }} Dolares</td>
                                <td>{{ $venta->email }}</td>
                               
                               
                                <td><a href="{{ route('ventas.edit',[$venta->id]) }}" class="btn btn-xs btn-info">Editar</a>{!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Estas seguro?")."');",
                'route' => ['ventas.destroy', $venta->id])) !!}
    {!! Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('ventas.mass_destroy') }}';
    </script>
@endsection