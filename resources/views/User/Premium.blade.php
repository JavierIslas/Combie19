@extends('Layouts.app')

@section('content')
<h1>Gracias por suscrivirse a nuestro sistema de beneficios</h1><br><p>Reglas: 
</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informacion de combro') }}
                </div>
                <form method="GET" action="{{ route('User.gold', $id) }}">
                    @csrf
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
                    <button type="submit" class="btn btn-primary btn-sm">Confirmar Pago</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection