
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Larabook</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if ($currentUser)
                    <li class="active"> {{ link_to_route('statuses_path', 'Statuses') }}</li>
               @endif
                <li class="active"> {{link_to_route('users_path', 'Users')}} </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Myne <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            @if ($currentUser)
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>

                    <li>{{ link_to_route('logout_path', 'Logout') }} </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                            <img class="nav-gravatar" src="{{ $currentUser->present()->gravatar() }}" alt="{{$currentUser->username}}">

                            {{ $currentUser->username }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a href="{{ route('profile_path', $currentUser->username) }}"> My Profile </a> </li>
                            <li role="separator" class="divider"></li>
                            <li>{{ link_to_route('logout_path', 'Logout') }} </li>
                        </ul>
                    </li>
                </ul>

            @else
                <ul class="nav navbar-nav navbar-right">

                    <li>{{ link_to_route('login_path', 'Login') }} </li>
                    <li>{{ link_to_route('register_path', 'Register') }}</li>
                </ul>

            @endif




</div><!-- /.navbar-collapse -->
</div>
</nav>