@extends('layouts.app')
@section('title', 'Listado de Cursos')

@section('template_title')
    Curso
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                 <h3 style="color: #1d8294;"><i class="fi fi-sr-book-bookmark" style="margin-right: 10px;"></i>{{ __('Cursos') }}</h3>
                            </span>
                            <div class="float-right">
                                <a href="{{route('courses.create')}}" class="btn btn-success float-right"  data-placement="left">
                                    {{ __('Crear Curso') }}
                                </a>
                            </div>


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
                                <th>Description</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Active</th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($courses as $course)

                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->description }}</td>
                                <td>{{ $course->date_start }}</td>
                                <td>{{ $course->date_end }}</td>
                                <td>{{ $course->active }}</td>


                                <td>
                                    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('courses.show',$course->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('courses.edit',$course->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $courses->links() !!}
        </div>
    </div>
</div>
@endsection




@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Curso') }}
                            </span>
                            <div class="float-right">
                                <a href="{{route('courses.create')}}" class="btn btn-success float-right"  data-placement="left">
                                  {{ __('Crear Curso') }}
                                </a>
                              </div>
                        </div>
                    </div>
<ul>
    @foreach ($courses as $course)
    <li>
        <a href="{{route('courses.show', $course)}}">{{$course->name}}</a>
    </li>

    @endforeach
</ul>
{{$courses->links()}}

@endsection
