@extends('layouts.app')
@section('title', 'Clases')

@section('template_title')
    Schedule
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 style="color: #1d8294;"><i class="fi fi-sr-book-alt" style="margin-right: 10px;"></i>{{ __('Clases (Schedule)') }}</h3>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('schedules.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
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

										<th>Id Class</th>
										<th>Time Start</th>
										<th>Time End</th>
										<th>Day</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedules as $schedule)
                                        <tr>

											<td>{{ $schedule->id_class }}</td>
											<td>{{ $schedule->time_start }}</td>
											<td>{{ $schedule->time_end }}</td>
											<td>{{ $schedule->day }}</td>

                                            <td>
                                                <form action="{{ route('schedules.destroy',$schedule->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('schedules.show',$schedule->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('schedules.edit',$schedule->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $schedules->links() !!}
            </div>
        </div>
    </div>
@endsection
