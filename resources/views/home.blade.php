@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

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
    <?php 
                
                echo "Bienvenido de nuevo $nombre";
                echo "<br>";
                echo "Tu saldo: $saldo";
                ?>
        <div class="user-card">
            <h4><b>Hazte con el mejor arte digital en nuestro mercado</b></h4>
            
            <button class="btn btn-light">Entrar</button>
        </div>
    </section>
    <h4 style="background-color: white; width:fit-content; padding: 15px; margin-bottom:-14px; margin-left:230px; border-radius: 20px"><b>Más populares </b> <img style="width: 1em; margin-bottom: .25em" src="https://cdn.jsdelivr.net/npm/emoji-datasource-apple@6.0.1/img/apple/64/1f525.png"></img></h4>
    <div class="slider" style="padding: 10px 0px;">
        <div class="slide-track">
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
            <div class="slide">
                <nft-card-mini autor="ArgDev" name="Mi primer NFT" img="img/unnamed.gif"></nft-card-mini>
            </div>
        </div>
    </div>
    <div style="height: 20px;"></div>
</div>