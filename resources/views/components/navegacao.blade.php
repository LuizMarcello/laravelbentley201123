<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">

            @auth

                <li class="nav-item" style="margin: 9%; color: blue">
                    {{ Auth::user()->name }}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" aria-current="page" href="{{ route('empresa.index') }}"> --}}
                    <a class="nav-link" aria-current="page" href="{{ route('empresa.dashboard') }}">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vendas.index') }}">
                        <span data-feather="file" class="align-text-bottom"></span>
                        Vendas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produto.index') }}">
                        <span data-feather="shopping-cart" class="align-text-bottom"></span>
                        Produto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clientes.index') }}">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario.index') }}">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Usuários
                    </a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Entrar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Cadastrar
                    </a>
                </li>
            @endguest


        </ul>


    </div>
</nav>
