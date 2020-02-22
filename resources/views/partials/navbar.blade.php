<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">My Awesome App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto small">

            @if (!Auth::User())

                <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true"><i class="fas fa-sign-in-alt"></i> SignIn</a>
            </li>
                @else
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
              <li class="nav-item">
                  <a href="{{route('setting')}}" class="nav-link">{{Auth::User()->name}}</a>
              </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fas fa-sign-in-alt">SignOut</i>
                    </a>
                </li>

            @endif
        </ul>


    </div>
</nav>