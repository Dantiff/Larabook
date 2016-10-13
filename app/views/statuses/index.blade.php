@extends('layouts.default')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <h1> Post a Status</h1>

            @include('layouts.partials.errors')

            <div class="status-post">

                {{ Form::open() }}

                <div class="form-group">
                    {{ Form::label('body', 'Status:') }}
                    {{ Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3, 'placeholder'=>"What's on your mind"]) }}
                </div>

                <div class="formgroup status-post-submit">
                    {{ Form::submit('Post Status', ['class'=>'btn btn-primary btn-xs']) }}
                </div>

                {{ Form::close() }}

            </div>

            <h2> Statuses </h2>

            @foreach($statuses as $status)

                @include('statuses.partials.status')

            @endforeach



        </div>

    </div>
@stop