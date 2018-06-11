@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @if (count($tasklists) > 0)
                    @include('tasklists.tasklists', ['tasklists' => $tasklists])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>WELCOME to myTASKLISTS</h1>
                <h3>Manege your tasks, finish your works!</h3>
                {!! link_to_route('signup.get', 'SIGN UP Here!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection