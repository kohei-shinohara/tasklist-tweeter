@extends('layouts.app')

@section('content')

    <h1>EDIT TASK #{{ $tasklist->id }} </h1>

    <div class="row">
        <div class="col-xs-12",  class="col-sm-8", class="col-md-8"  class="col-lg-offset-3 col-lg-6">
            {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'STATUS:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'TASK:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('UPDATE', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection