@extends('layouts.app')

@section('content')

    <h1>ADD A NEW TASK</h1>

    <div class="row">
         <div class="col-xs-12",  class="col-sm-8", class="col-md-8"  class="col-lg-offset-3 col-lg-6">
            {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'TITLE:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'TASK:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ADD', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection