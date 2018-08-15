<div class="card"></div>
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li>
                        <a href="{{route('index')}}"><i class="fa fa-3x fa-home" style="color:#f4476b;"></i></a>
                    </li>
                </ul>
                <span class="navbar-text actions">
                    @guest
                        <a href="{{url('login')}}" class="login">Log In</a>
                        <a class="btn btn-light action-button" role="button" href="{{url('register')}}" style="background-color:#f4476b;">Sign Up</a>
                    @else
                        <li class="nav-item dropdown" style="list-style-type: none;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->is_super_admin)
                                    <a class="dropdown-item" href="{{route('adminMenu')}}">Administration</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </span>
            </div>
        </div>
    </nav>
</div>
