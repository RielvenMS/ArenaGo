<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Deportivo - Pereira</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png" type="image/gif') }}" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('css/mapa.css') }}">

    
</head>
<body class="main-layout head_posstinhi">

<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
</div>

<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="/">Home</a>
    <a href="/escenarios">Escenarios</a>
    <a href="/mapa">Mapa</a>
</div>

<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                <div class="center-desk">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="#" /></a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <div class="right_bottun">
                @guest
                    <a class="login" href="{{ route('login') }}">Login</a>
                @endguest
                @auth
                    <a type="button" class="login" data-toggle="modal" data-target="#modalCrearEscenario">
                        Añadir Escenario
                    </a>
                    <a class="login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
                <button class="openbtn" onclick="openNav()"><img src="{{ asset('images/menu_icon.png') }}" alt="#"/> </button> 
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->