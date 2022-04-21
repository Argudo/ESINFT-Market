<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"></link>
        <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
        <script type="module" src="{{ asset('js/cardComponent.js') }}"></script>
    </head>
    <body>
        <div class="context">
            <h1>ESI NFT MARKETPLACE</h1>
        </div>
        <div id="login">
            <button id="login-btn" type="button" class="btn btn-light" onclick="web3setup();"><b id="text">METAMASK LOG IN</b></button>
            <p id="account" style="z-index: 2; margin: auto; background-color: white; padding: 15px; border-radius: 5px; font-weight: bold; display: none;"></p>
            <nft-card autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card>
        </div>
        <div class="area" >
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </body>
</html>
