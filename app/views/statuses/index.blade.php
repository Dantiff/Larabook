@extends('layouts.default')

@section('content')

    <h1> Post a Status</h1>

    {{ Form::open() }}

        <div class="form-group">
            {{ Form::label('Status', 'Status:') }}
            {{ Form::textarea('Status', null, ['class'=>'form-control']) }}
        </div>

        <div class="formgroup">
            {{ Form::submit('Post Status', ['class'=>'btn btn-primary']) }}
        </div>

    {{ Form::close() }}


@stop