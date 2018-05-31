@extends('layouts.app')

@section('content')

    <h1>EDIT TASK # id: {{ $tasklist->id }} </h1>

    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('UPDATE') !!}

    {!! Form::close() !!}

@endsection