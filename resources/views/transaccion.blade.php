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
    <section id="user-section" style="width:80%; margin: 100px auto;">
        <h2><b>Mis Transacciones</b></h2><hr>
        <div style="display: flex; justify-content: center">
            <table>
                <thead>
                    <th>Fecha de la transaccion</th>
                    <th>NFT</th>
                    <th>Precio</th>
                    <th>Operación</th>
                </thead>
            @foreach($nfts as $nft)
                <?php
                    echo '<tr>';
                    echo "<td>$nft->fecha_compra<td>$nft->id_nft<td>$nft->precio<td>$nft->id_vendedor → $nft->id_comprador";
                    echo '</tr>';
                ?>
            @endforeach
            </table>
        </div>
    </section>
    <div style="height: 20px;"></div>
</div>

