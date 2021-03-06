<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('head')


    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link rel="stylesheet" href='{{ URL::asset("css/styles.css") }}' />
    <title>
        @yield('title')
    </title>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="oportalu">O portalu</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="dogadjaji">Događaji</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="vesti">Vesti</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="ankete">Ankete</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="pravilnik">Pravilnik</a></li>

                    @if (Route::has('login'))
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login">Prijava</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="register">Registracija</a></li>


{{--                     @if (Auth::check())
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout">Odjava</a></li>
                    @endif --}}

{{--                Laravel | How to check if a user is logged in, inside a blade file?
                    Only Login and Guest
                    @auth
                    // The user is login...
                    @endauth
                    @guest
                    // The user is not login...
                    @endguest

                    Check Login and Guest With Guard
                    @auth('admin')
                    // The user is login with admin...
                    @endauth
                    @guest('admin')
                        // The user is not login with admin...
                    @endguest --}}

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset("img/assets/nisville.jpg") }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Kulturna dešavanja</h1>
                        <span class="subheading">Srbija - ljudi, tradicija, gastronomija</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">


        <div class="heading">
            @yield('heading')
        </div>
        <div class="content">
            @yield('content')
        </div>

        <div class="footer">

            <a href="viber://chat?number=38163333333">Kontakt</a>
        </div>
    </div>

</body>
</html>
