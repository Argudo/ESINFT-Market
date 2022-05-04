@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('contenido')
<div style="margin: 100px 0px; width: 100%; height:90%">
    <div id="presentacion">
        <div>
            <h1><b>ESI NFT Marketplace</b></h1>
            <h4 style="color: gray;">Un lema genérico que no te dice absolutamente nada</h4>
        </div>
        <img src="img/banner.jpg" alt="">
    </div>
    <section id="user-section">
    <h2><b>Venta NFT</b></h2>
    <?php 
               // $imagen = "img/NFTs/$nft->imagen";
                //echo "<nft-card-mini autor='Yo' name='$nft->nombre' img=$imagen  comprar = 'vender'></nft-card-mini>";
    ?>
   
    @endforeach
        
    </section>
   
    <div style="height: 20px;"></div>
</div>