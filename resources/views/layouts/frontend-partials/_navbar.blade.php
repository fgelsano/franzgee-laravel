<nav class="navbar navbar-fixed-top navbar-dark navbar-expand-md" id="main-navbar">
    <div class="container">        
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Francis Gelsano') }}
        </a>
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="hvr-underline-from-center nav-link"><a href="#home" class="text-white px-2">Home</a></li>
                <li class="hvr-underline-from-center nav-link"><a href="#about-me" class="text-white px-2">About Me</a></li>
                <li class="hvr-underline-from-center nav-link"><a href="#portfolio" class="text-white px-2">Portfolio</a></li>
                <li class="hvr-underline-from-center nav-link"><a href="#blogs" class="text-white px-2">Blogs</a></li>
                <li class="hvr-underline-from-center nav-link"><a href="#contact" class="text-white px-2">Contact Me</a></li>
                <!-- Authentication Links -->
                {{-- @guest
                    <li class="nav-item">
                        <a class="nav-link btn btn-info btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                @endguest --}}
            </ul>
        </div>
    </div>
</nav>