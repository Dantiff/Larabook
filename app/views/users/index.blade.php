@extends('layouts.default')

@section('content')

    <h1> All Users </h1>

    @foreach($users->chunk(4) as $userSet)
        <div class="row">
            @foreach($userSet as $user)

                <div class="col-md-3 user-block">

                    @include ('layouts.partials.avatar', ['size'=>70])

                    {{ link_to_route('profile_path', $user->username, $user->username) }}

                </div>

            @endforeach
        </div>
    @endforeach

    <div class="col-md-4 col-md-offset-4">

        {{ $users->links() }}

    </div>

 @stop