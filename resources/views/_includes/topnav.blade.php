<nav id="navbar-default" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img id="logo" class="logo-white img-responsive" src="{{ asset('css/template/images/Whitelogo-no-background.png')}}" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navigation" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('projects.index') }}">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('blog.index')}}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ url('about')}}">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('contact.index')}}">Contact</a>
            </li>
             <!-- Authentication Links -->
             @guest
             <li class="nav-item">
                 <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
             @if (Route::has('register'))
                 <li class="nav-item">
                     <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
             @endif
         @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     {{ Auth::user()->name }}
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    @if(Auth::user()->email == 'thomas.bockhorn@tecktonet.com')
                        <a href="{{ route('admin') }}" class="dropdown-item text-white bg-dark">Admin</a>
                    @endif

                    <a class="dropdown-item text-white bg-dark" href="{{ route('logout') }}"
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
        </ul>
    </div>
</nav>
