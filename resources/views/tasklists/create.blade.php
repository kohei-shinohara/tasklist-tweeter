@extends('layouts.app')

@section('content')

    <h1>ADD A NEW TASK</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('status', 'STATUS:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('ADD') !!}

    {!! Form::close() !!}

@endsection