@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('opciones')
    <li class="nav-item">
        <a class="nav-link" href="/home">Inicio</a>
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
        <a class="nav-link active" style="color: white;" aria-current="page" href="/transacciones">Mis&nbsptransacciones</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/perfil">Perfil</a>
@endsection

@section('contenido')
<div style="margin: 100px 0px; width: 100%; height:100%;">
    <section id="user-section" style="width:80%; margin: 150px auto;">
        <h2><b>Mis Transacciones</b></h2>
        <div style="box-sizing:border-box; display:flex; justify-content:space-around; height:100%; flex-wrap: wrap">
            @foreach($nfts as $nft)
                <?php 
                    echo "Identificador de transaccion= $nft->id  Cartera del vendedor = $nft->id_vendedor Cartera del comprador = $nft->id_comprador Identificador de Nft=$nft->id_nft Precio= $nft->precio Fecha de la transaccion =  $nft->fecha_compra ";
                    echo "<br>";
                ?>
            @endforeach
        </div>
    </section>
    <div style="height: 20px;"></div>
</div>

