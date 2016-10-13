<article class="media status-media">

    <div class="pull-left">
        @include ('layouts.partials.avatar', ['user'=> $status->user])
    </div>

    <div class="media-body">
        <h4 class="media-heading"> {{ $status->user->username }}</h4>
            <p> {{ $status->present()->timeSincePublished() }}</p>
{{--        <p> {{ $status->created_at->diffForHumans() }}</p>--}}

        {{ $status->body }}
    </div>


</article>