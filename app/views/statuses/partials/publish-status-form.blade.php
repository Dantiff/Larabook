
@include('layouts.partials.errors')

<div class="status-post">

    {{ Form::open(['route'=>'statuses_path']) }}

    <div class="form-group">
        {{ Form::label('body', 'Status:') }}
        {{ Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3, 'placeholder'=>"What's on your mind"]) }}
    </div>

    <div class="formgroup status-post-submit">
        {{ Form::submit('Post Status', ['class'=>'btn btn-primary btn-xs']) }}
    </div>

    {{ Form::close() }}

</div>