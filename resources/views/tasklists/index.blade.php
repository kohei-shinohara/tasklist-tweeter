@extends('layouts.app')

@section('content')
    <h1>ALL TASKS </h1>
   @if (count($tasklists) > 0)
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>STATUS</th>
                    <th>TASK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists as $tasklist)
                    <tr>
                        <td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                        <td>{{ $tasklist->status }}</td>
                        <td>{{ $tasklist->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasklists.create', 'ADD A NEW TASK', null, ['class' => 'btn btn-success']) !!}
    
    <p><br>[STATUS] <br> C: Completed<br> P: Processing <br> U: Unprocessed</p>
@endsection