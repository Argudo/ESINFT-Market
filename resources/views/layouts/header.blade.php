<!DOCTYPE html>
<html lang="es">
    <?php
        session_start()
    ?>

    <head>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        @stack('styles')
        @stack('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="module" src="{{ asset('js/cardComponent.js') }}"></script>
    </head>
    <body>
        <header style="position: fixed; top: 0%; width: 100%; z-index: 2;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <img class="navbar-brand" src="/img/nft-icon.png" style="width: 3.5em;" alt="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="barra" style="gap: 1em;" class="navbar-nav ms-auto mb-2 mb-lg-0 nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" style="color: white;" aria-current="page" href="/home">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mercado">Mercado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/NFT">Crear&nbspNFT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/misNFTs">Mis&nbspNFTs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/perfil">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('contenido')
    </body>
</html>