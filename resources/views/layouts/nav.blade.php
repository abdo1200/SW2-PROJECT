<nav class="navbar navbar-expand-lg navbar-light">
<<<<<<< HEAD
    <a class="navbar-brand offset-lg-1" href="/home" style="color:steelblue;">Check-In</a>
=======
    <a class="navbar-brand offset-lg-1" href="/" style="color:steelblue;">Check-In</a>
>>>>>>> f9e87ba9eb7727feb146ad6acd03795488881e36
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<<<<<<< HEAD
        @if (auth()->user()->jop == 'user')
        <ul class="navbar-nav offset-lg-1">
            <li class="nav-item">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item offset-lg-3">
                <a class="nav-link" href="/home#about">About</a>
            </li>
            <li class="nav-item offset-lg-3">
                <a class="nav-link" href="/home#book">Booking</a>
            </li>
            <li class="nav-item offset-lg-3">
                <a class="nav-link" href="/home#gallary">Gallary</a>
            </li>
        </ul>
        @elseif (auth()->user()->jop == 'admin')
        <ul class="navbar-nav">
            <li class="nav-item ml-5">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="{{'/admin/viewuser.blade.php'}}">View users</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="#">View reservation</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="#">View rooms</a>
            </li>
        </ul>
        @endif
        <ul class="navbar-nav ml-auto mr-3">
            <!-- Authentication Links -->
            @guest
=======
      <ul class="navbar-nav offset-lg-1">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item offset-lg-3">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item offset-lg-3">
          <a class="nav-link" href="#book">Booking</a>
        </li>
        <li class="nav-item offset-lg-3">
          <a class="nav-link" href="#gallary">Gallary</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto mr-3">
        <!-- Authentication Links -->
        @guest
>>>>>>> f9e87ba9eb7727feb146ad6acd03795488881e36
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                    @if(Auth::user()->jop=='user')
                    <a class="dropdown-item" href="/user/viewprofile.blade.php">
                        My profile
                    </a>
                    <hr>
                    <a class="dropdown-item" href="/home">
                        My Booking
                    </a>
                    <hr>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
=======
                    
                  <a class="dropdown-item" href="/home">
                    My Booking
                  </a>
                  <hr>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
>>>>>>> f9e87ba9eb7727feb146ad6acd03795488881e36
                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
