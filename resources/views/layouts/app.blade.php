<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teste') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Entrar</a></li>
                            <li><a href="{{ url('/register') }}">Registrar</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    &nbsp Cadastros Base<span class="caret"></span>
                                </a>
                            
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/pessoas') }}">Pessoas</a></li>
                                    <li><a href="{{ url('/telefones_pessoais') }}">Telefones Pessoais</a></li>
                                    <li><a href="{{ url('/emails_pessoais') }}">Emails Pessoais</a></li>
                                    <li><a href="{{ url('/enderecos_pessoais') }}">Endereços Pessoais</a></li>
                                    <li><a href="{{ url('/suplementos_pessoais') }}">Suplementos Pessoais</a></li>
                                    <li><a href="{{ url('/empresas') }}">Empresas</a></li>
                                    <li><a href="{{ url('/contatos_corporativos') }}">Contatos Corporativos</a></li>
                                    <li><a href="{{ url('/emails_corporativos') }}">Emails Corporativos</a></li>
                                    <li><a href="{{ url('/enderecos_corporativos') }}">Endereços Corporativos</a></li>
                                    <li><a href="{{ url('/telefones_corporativos') }}">Telefones Corporativos</a></li>
                                    <li><a href="{{ url('/suplementos_corporativos') }}">Suplementos Corporativos</a></li>
                                    <li><a href="{{ url('/clientes') }}">Clientes</a></li>
                                    <li><a href="{{ url('/fornecedores') }}">Fornecedores</a></li>
                                    <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                                    <li><a href="{{ url('/produtos_fornecidos') }}">Produtos Fornecidos</a></li>
                                    <li><a href="{{ url('/colaboradores') }}">Colaboradores</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    &nbsp Processos<span class="caret"></span>
                                </a>
                                    
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/ordens_compra') }}">Orderns de Compra</a></li>
                                    <li><a href="{{ url('/ordens_venda') }}">Orderns de Venda</a></li>
                                    <li><a href="{{ url('/nfs_entrada') }}">NFs de Entrada</a></li>
                                    <li><a href="{{ url('/nfs_saida') }}">NFs de Saída</a></li>
                                    <li><a href="{{ url('/produtos_comprados') }}">Produtos Comprados</a></li>
                                    <li><a href="{{ url('/produtos_vendidos') }}">Produtos Vendidos</a></li>
                                    <li><a href="{{ url('/clientes_simplificado') }}">Clientes Simplificado</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    &nbsp Financeiro<span class="caret"></span>
                                </a>
     
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/fluxo_caixa') }}">Fluxo de Caixa</a></li>
                                    <li><a href="{{ url('/contas') }}">Contas</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ url('/estoque') }}">Estoque</a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
