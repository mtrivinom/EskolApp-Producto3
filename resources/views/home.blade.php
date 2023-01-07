@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>¡Bienvenido usuario {{ Auth::user()->name }}!</h3></div>

                <div class="card-body">


                    {{ __('No hay ninguna novedad.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
