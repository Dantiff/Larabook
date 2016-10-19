@extends('layouts.default')
<div style="padding-top: 60px;">
    @section('content')
        <div  class="col-md-8 col-lg-offset-2">
            <h1> Need to remember your password? </h1>


            {{ Form::open() }}

            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Reset Password', ['class'=>'btn btn-primary form-control']) }}
            </div>

            {{Form::close()}}

        </div>


    @stop
</div>
