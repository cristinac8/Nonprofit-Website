<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{--  font awesome css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
          integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    {{--  custom css  --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>{{ env("APP_NAME") }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Help a Soul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('') }}">Home / Acasă</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('post-stories') }}">Projects / Proiecte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn--campaign" href="{{ url('campaigns') }}">Campaigns / Campanii</a>
                    </li>
                    @if(session()->has('client'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profile') }}">History / Istoric</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('logout') }}">Logout / Delogare</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login / Conectează-te</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        @if(App::currentLocale() == 'en')
                            <a class="nav-link" href="{{ url('lang/ro') }}">RO</a>
                        @else
                            <a class="nav-link" href="{{ url('lang/en') }}">EN</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

@yield('content')

<footer>
    Contact: <a href="helpasoul@gmail.com">helpasoul@gmail.com</a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    &copy; 2022 All right reserved
</footer>


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ url('login') }}" class="w-100" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="loginEmail">Email</label>
                            <input type="email" class="form-control" id="loginEmail">
                        </div>
                        <div class="form-group mb-3">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="loginPassword">
                        </div>
                        Don't have account yet? <a href="{{ url('register') }}">Register</a>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
