<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closet</title>
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS file -->
    <link rel="stylesheet" href="/css/style.css">


<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
                <a class="navbar-brand" href="/"> <i class="fas fa-shopping-cart"></i> Closet </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbar=Text" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>

                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/explorecloset">Explore closet</a>
                        </li>
                        <li class="nav-item">
                        <form action="/search" method="post">
                            @csrf
                            <div class="form-input">
                                <input type="search" name="search" placeholder="Search...">
                                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                            </div>
                        </form>
                        </li>




                        @if(auth()->user())
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </header>
</body>

</html>
