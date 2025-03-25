<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" height: 100px;">
        <a class="navbar-brand w-25 ms-5" href="{{ route('home') }}">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" style="width: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                </li>
            </ul>
        </div>
    </nav>    
                
</header>