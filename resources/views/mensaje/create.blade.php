@extends('layouts.app')
@section('title', 'Manda un mensaje')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><h3>{{ __('Enviar mensaje') }}</h3></div>
                <form method="POST" action="{{route('messages.store')}}">
                    @csrf

                <div class="card-body">
                    <div class="form-group" style="">
                        <select name="recipient_id"  class="form-control">
                            <option value="">Selecciona el usuario</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        @error('recipient_id')
                        *{{$message}}
                        @enderror

                    </div>

                    <div class="form-group" >
                        <textarea name="body" class="form-control" placeholder="Escribe aquí tu mensaje"></textarea>
                        @error('body')
                        *{{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Enviar</button>
                    </div>


                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
