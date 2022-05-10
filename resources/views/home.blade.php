@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('opciones')
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
        <a class="nav-link" href="/transacciones">Mis&nbsptransacciones</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" style="color: white; background-color:#4CBD49; display: inline-flex;" href="/perfil">
            <?php 
                echo "$nombre"."&nbsp-&nbsp"."$saldo".'&nbspEther';
            ?>
        </a>
    </li>
@endsection

@section('contenido')
<div style="margin: 100px 0px; width: 100%; height:90%">
    <div id="presentacion">
        <div>
            <h1><b>ESI NFT Marketplace</b></h1>
            <h4 style="color: gray;">Desde NFTs de Antonio Sala hasta NFTs de Josefi</h4>
        </div>
        <img src="img/banner.jpg" alt="">
    </div>
    <section id="user-section">
        <div class="user-card">
            <h4><b>Hazte con el mejor arte digital en nuestro mercado</b></h4>
            
            <button class="btn btn-light" onclick="location.href='/mercado'">Entrar</button>
        </div>
    </section>
    <h4 style="background-color: white; width:fit-content; padding: 15px; margin-bottom:-14px; margin-left:230px; border-radius: 20px"><b>Más populares </b> <img style="width: 1em; margin-bottom: .25em" src="https://cdn.jsdelivr.net/npm/emoji-datasource-apple@6.0.1/img/apple/64/1f525.png"></img></h4>
    <div class="slider" style="padding: 10px 0px;">
        <div class="slide-track">
            <?php
            for($i=0; $i<=13; $i++){
                if(isset($populares[$i])){
                    $nft = $populares[$i];
                    $imagen = "/img/NFTs/$nft->imagen";
                    echo '
                        <div class="slide">
                            '."<nft-card-mini autor='$nft->nombre' name='$nft->nombreNFT' img=$imagen price = '$nft->valor' enlace='comprar/{$nft->id}' ></nft-card-mini>".'
                        </div>
                    ';
                }
            }

            ?>
        </div>
    </div>
    <div style="height: 20px;"></div>

    <?php
            switch($x){
                case '0': 
                        break;
                case '1': echo '<script>alert("NFT creado con éxito")</script>';
                        break;
                case '2': echo '<script>alert("Datos actualizados con éxito")</script>';
                        break;
                case '3': echo '<script>alert("NFT puesto en el mercado con éxito")</script>';
                        break;
                case '4': echo '<script>alert("Compra realizada con éxito")</script>';
                        break;
                case '5': echo '<script>alert("Error: NFT ya en venta")</script>';
                        break;
                case '6': echo '<script>alert("Error: Saldo insuficiente")</script>';
                        break;
                default: break;
            }

            ?>
</div>