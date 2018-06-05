@extends('layouts.app')

@section('content')
    <h1>DETAILS OF TASK #{{ $tasklist->id }} </h1>
    <table class="table table-bordered table-bordered table-hover">
        <tr>
            <th>ID</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td>{{ $tasklist->status }}</td>
        </tr>
        <tr>
            <th>TASK</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasklists.edit', 'EDIT THIS TASK', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection