@extends('layouts.app')

@section('content')
    <h3 class="page-title">Ventas</h3>
    
    {!! Form::model($venta, ['method' => 'PUT', 'route' => ['ventas.update', $venta->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Editar
        </div>
   <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('descripcion', 'Descripcion*', ['class' => 'control-label']) !!}
                    {!! Form::text('descripcion', old('descripcion'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('descripcion'))
                        <p class="help-block">
                            {{ $errors->first('descripcion') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('precio', 'Precio(Dolares)*', ['class' => 'control-label']) !!}
                    {!! Form::text('precio', old('precio'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('precio'))
                        <p class="help-block">
                            {{ $errors->first('precio') }}
                        </p>
                    @endif
                </div>
            </div>
            
             <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Correo Comprador*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            
            
            </div>
    </div>

    {!! Form::submit('Aceptar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

