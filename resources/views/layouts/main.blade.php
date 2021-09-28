<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/contact.css">

        <script src="/js/index.js"></script>

        <title>@yield('title')</title>

        {{-- Font do google --}}

        {{-- CSS da aplicação --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- CSS Bootsrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        {{-- Icons --}}
        {{-- import SearchIcon from '@mui/icons-material/Search'; --}}
    </head>

    <body>
        <div id="home" class="content">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div id="navbar" class="collapse navbar-collapse">
                        <a href="/" class="navbar-logo">
                            <img src="/img/Agro_vendas.png" alt="logo do site">
                        </a>

                        <form action="">
                            <label class="sr-only" for="search">Buscar por produtos</label>
                            <input type="text" id="search" name="search" class="input-class" placeholder="buscar por produto">
                        

                            <a href="/" class="button">
                                <img src="/img/buscar.svg" alt="buscar">
                            </a>
                        </form>
    
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/events/contact" class="nav-link">Contatos</a>
                            </li> <li class="nav-item">
                                <a href="/events/sobre" class="nav-link">Sobre</a>
                            </li> <li class="nav-item">
                                <a href="/events/services" class="nav-link">Serviços</a>
            
                        </ul>
    
                    </div>
                </nav>
            </header>
            
            @yield('content')
    
            <div class="footer-container">

                <footer>
                    <h3 class="title"> Agro Vendas &copy; 2022</h3>

                    <p class="sub-title">Preços e condições de pagamento exclusivos para compras via internet,
                        podendo variar nas lojas físicas. Ofertas válidas na compra de até 5 
                        peças de cada produto por cliente, até o término dos nossos estoques para internet. Caso os produtos apresentem divergências de valores, o preço válido é o da Sacola de compras.<br>
                        Vendas sujeitas a análise e confirmação de dados.
                    </p>
                </footer>
                
            </div>

        </div>
        
    </body>
</html>
