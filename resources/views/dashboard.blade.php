<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>
        {{-- <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li> --}}
        {{-- <li><a href="{{ route('login.logout')}}">Sair</a></li>  --}}
    </ul>


    <nav class="red">
        <div class="nav-wrapper container ">
            <a href="#" class="center brand-logo " href="index.html"><img src="img/logo.png"></a>
            <ul class="right ">
                <li class="hide-on-med-and-down"><a href="#" onclick="fullScreen()"><i
                            class="material-icons">settings_overscan</i> </a> </li>
                <li><a href="#" class="dropdown-trigger" data-target='dropdown2'>
                        {{ isset(Auth::user()->name) ?  "Olá " . Auth::user()->name : '' }} <i
                            class="material-icons right">expand_more</i> </a></li>
                {{-- <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link> --}}
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger left  show-on-large"><i
                    class="material-icons">menu</i></a>
        </div>
    </nav>


    <ul id="slide-out" class="sidenav ">
        <li>
            <div class="user-view">
                <div class="background red ">
                    <img src="img/office.jpg" style="opacity: 0.5">
                </div>
                <a href="#"><img class="circle" src="img/user.jpg"></a>
                <a href="#"><span class="white-text name">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</span></a>
                <a href="#"><span class="white-text email">{{ isset(Auth::user()->email) ? Auth::user()->email : '' }}</span></a>
            </div>
        </li>
        @auth
            <li><a href="{{ route('empresa.index') }}"><i class="material-icons">dashboard</i>Empresa</a></li>
            {{-- <li><a href="{{ route('produto.index') }}"><i class="material-icons">playlist_add_circle</i>Produtos</a></li> --}}
            {{-- <li><a href="{{ route('vendas.index') }}"><i class="material-icons">shopping_cart</i>Vendas</a></li> --}}
            {{-- <li><a href="{{ route('clientes.index') }}"><i class="material-icons">bookmarks</i>Clientes</a></li> --}}
            {{-- <li><a href="{{ route('usuario.index') }}"><i class="material-icons">peoples</i>Usuários</a></li> --}}
        @endauth
        @guest
            <li><a href="/login"><i class="material-icons">peoples</i>Entrar</a></li>
            <li><a href="/register"><i class="material-icons">peoples</i>Cadastrar</a></li>
        @endguest
    </ul>

    <div class="row container">
        <section class="info">

            <div class="col s12 m4">
                <article class="bg-gradient-green card z-depth-4 ">
                    <i class="material-icons">paid</i>
                    <p>Faturamento</p>
                    <h3>R$ 123,00</h3>
                </article>
            </div>

            <div class="col s12 m4">
                <article class="bg-gradient-blue card z-depth-4 ">
                    <i class="material-icons">face</i>
                    <p>Usuários</p>
                    <h3>34 </h3>
                </article>
            </div>

            <div class="col s12 m4">
                <article class="bg-gradient-orange card z-depth-4 ">
                    <i class="material-icons">shopping_cart</i>
                    <p>Pedidos este mês</p>
                    <h3>0</h3>
                </article>
            </div>

        </section>
    </div>


    <div class="row container ">
        <section class="graficos col s12 m6">
            <div class="grafico card z-depth-4">
                <h5 class="center"> Aquisição de usuários</h5>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </section>

        <section class="graficos col s12 m6">
            <div class="grafico card z-depth-4">
                <h5 class="center"> Produtos </h5>
                <canvas id="myChart2" width="400" height="200"></canvas>
            </div>
        </section>
    </div>




    </div>




    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
