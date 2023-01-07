<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Name:') }}
            {{ Form::text('name', $asignatura->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Course:') }}
            {{ Form::text('id_course', $asignatura->id_course, ['class' => 'form-control' . ($errors->has('id_course') ? ' is-invalid' : ''), 'placeholder' => 'Id Course']) }}
            {!! $errors->first('id_course', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Schedule:') }}
            {{ Form::text('id_schedule', $asignatura->id_schedule, ['class' => 'form-control' . ($errors->has('id_schedule') ? ' is-invalid' : ''), 'placeholder' => 'Id Schedule']) }}
            {!! $errors->first('id_schedule', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Teacher:') }}
            {{ Form::text('id_teacher', $asignatura->id_teacher, ['class' => 'form-control' . ($errors->has('id_teacher') ? ' is-invalid' : ''), 'placeholder' => 'Id Teacher']) }}
            {!! $errors->first('id_teacher', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Aceptar</button>
    </div>
</div>
