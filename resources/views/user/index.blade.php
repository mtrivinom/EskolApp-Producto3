@extends('layouts.app')
@section('title', 'Indice Cursos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 style="color: #1d8294;"><i class="fi fi-sr-users" style="margin-right: 10px;"></i>Usuarios del Centro</h3>
                            </span>


                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Tipo</th>
                                <th>email</th>
                                <th>Create</th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->tipo }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>


                                <td>

                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('user.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('user.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $users->links() !!}
        </div>
    </div>
</div>
@endsection





