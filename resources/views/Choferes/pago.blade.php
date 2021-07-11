@extends('layouts.app')

@section('title', 'Registra de Chofer')

@section('content')
    <h1>Registrar usuario </h1>
@include('partials.errorVal')
<h1>Por favor ingrese la informacion para el pago</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Informacion de combro') }}</div>

                        <div class="card-body">
                                <div class="form-group">
                                    <label for="precio">Precio:</label>
                                    <input type="text" id="precio" value="$ {{$viaje->precio}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre del propetario de la tarjeta</label>
                                    <input type="text" id="nombre" placeholder="Nombre que muestra la tarjeta" required>
                                </div>
                                <div class="form-group">
                                    <label for="tarjeta">Ingrese los 16 numeros de la tarjeta</label>
                                    <input type="text" name="tarjeta" required       minlength="16" maxlength="16" >
                                </div>
                                <div class="form-group">
                                    <label for="seguridad">Ingrese los 3 numeros de seguridad</label>
                                    <input type="text" name="seguridad" required       minlength="3" maxlength="3" >
                                </div>
                                <div class="form-group">
                                    <label for="vencimiento">Vence:</label>
                                    <input type="month" name="vencimiento" min="2021-10">
                                </div>
                                <form method="POST" action="{{ route('Pasajes.store') }}">
                                    @csrf
                                    <label>Codigo de Viaje:</label>
                                    <input type="text" name="viaje_id" value="{{$viaje->id}}" readonly>
                                    <input type="hidden" name="usuario_id" value="{{$usuario->id}}" readonly>
                                        <input type="text" id="estado" value="reservado" readonly hidden> <br>
                                    <button type="submit" class="btn btn-primary btn-sm">Confirmar Pago</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection