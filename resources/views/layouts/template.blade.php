<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>Document</title>
    {{ Html::style('css/app.css') }}
</head>
<body style="background-color: #ebebeb">
    <div id="app" class="row col-md-12 no-gutters">
        <aside class="row col-md-3 d-none d-lg-block d-xl-block">
            <nav class="navbar navb fixed-top col-md-12">
                <ul class="row col-md-12">
                    <li class="navbar-option row col-md-12">
                        <button type="button" class="button">
                            <router-link to="/">
                                <i class="fas fa-home"></i>
                                <h2>Zona Inicial</h2>
                            </router-link>
                        </button>
                    </li>
                    <li class="navbar-option row col-md-12">
                        <button type="button" class="button" @click.prevent="showedModal(true)">
                            <router-link tag="a" :to="{path: 'login'}">
                                <i class="fas fa-users"></i>
                                <h2>Identificate</h2>
                            </router-link>

                        </button>
                    </li>
                    <li class="navbar-option row col-md-12">
                        <button type="button" class="button">
                           <router-link tag="a" :to="{path: 'contact'}">                             
                                <i class="fab fa-blackberry"></i>
                                <h3>Contactanos</h3>
                           </router-link>
                            </a>
                        </button>
                    </li>
                    <li class="navbar-option row col-md-12">
                        <button type="button" class="button">
                            <router-link tag="a" :to="{path: 'about'}"> 
                                <i class="fas fa-warehouse"></i>
                                <h3>Sobre Nosotros</h3>
                            </router-link>
                        </button>
                    </li>
                </ul>
            </nav>
        </aside>

        <aside class="col-md-12 d-lg-none d-xl-none">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark bar-md fixed-top">
                <a class="navbar-brand" href="#">Institución</a>
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
                            <li class="nav-item navbar-option-md">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item navbar-option-md">
                                <a class="nav-link" href="#">Identificate</a>
                            </li>
                            <li class="nav-item navbar-option-md">
                                <a class="nav-link" href="#">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item navbar-option-md">
                                <a class="nav-link" href="#">Contactanos</a>
                            </li>
                        </ul>
                </div>
            </nav>
        </aside>

        <div class="col-md-9 content">
            @yield('content')
        </div>
    </div>
    {{ Html::script('js/app.js') }}

</body>
</html>
