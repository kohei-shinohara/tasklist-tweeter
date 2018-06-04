@extends('layouts.app')

@section('content')

    <h1>DETAILS OF TASK # id = {{ $tasklist->id }} </h1>

    <p>STATUS: {{ $tasklist->status }}</p>    
    <p>{{ $tasklist->content }}</p>
    
    {!! link_to_route('tasklists.edit', 'EDIT THIS TASK', ['id' => $tasklist->id]) !!}

    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE') !!}
    {!! Form::close() !!}

@endsection