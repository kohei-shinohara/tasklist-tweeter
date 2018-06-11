@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">TASKS <span class="badge">{{ $count_tasklists }}</span></a></li>
                <li><a href="#">FOLLOINGs</a></li>
                <li><a href="#">FOLLOWERs</a></li>
            </ul>
            @if (Auth::user()->id == $user->id)
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                {!! Form::open(['route' => 'tasklists.store']) !!}
                    <div class="form-group">
                        {!! Form::label('status', 'STATUS:') !!}
                        {!! Form::text('status', old('status'), ['class' => 'form-control', 'rows' => '2']) !!}
                    
                    </div>
                    <div class="form-group">
                    {!! Form::label('content', 'TASK:') !!}
                    {!! Form::text('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                    
                    </div>
                     <div class="form-group">
                        {!! Form::submit('ADD', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            @endif
            @if (count($tasklists) > 0)
                @include('tasklists.tasklists', ['tasklists' => $tasklists])
            @endif
        </div>
    </div>
@endsection