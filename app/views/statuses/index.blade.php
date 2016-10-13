@extends('layouts.default')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <h1> Post a Status</h1>

            @include('statuses.partials.publish-status-form')

            <h2> Statuses </h2>

            @include('statuses.partials.statuses')

        </div>

    </div>
@stop