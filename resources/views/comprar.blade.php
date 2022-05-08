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
        <a class="nav-link" href="/transacciones">Mis&nbsptransacciones</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/perfil">Perfil</a>
@endsection

@section('contenido')
<div style="margin: 100px 0px; width: 100%; height:100%;">
    <section id="user-section" style="width:80%; margin: 100px auto;">
        <h2><b>Seccion compra</b></h2><hr style="margin-bottom: 40px;">
        @foreach($nfts as $nft)
        <?php
            $imagen = "/img/NFTs/$nft->imagen";
            echo '<nft-card-mini autor="Yo" name="'.$nft->nombreNFT.'" img="'.$imagen.'" enlace="'.$nft->id.'" price="'.$nft->valor.'"></nft-card-mini>';
        ?>
        
        <div class="row">
                <div class="col-xl-12">
                    <form action="/compra" method="post">
                        @csrf
                            <div class="form-group">
                                <?php
                                    echo "$nft->id";
                                    echo "<input type='hidden' name='id' value = $nft->id_nft>";
                                    echo "<input type='hidden' name='precio' value = $nft->valor>";
                                    echo "¿Seguro que quieres comprar este NFT?";
                                ?>
                                
                            </div>
                        <div class="form-group" style="margin-top: 20px;">
                            <input type="submit" class="btn btn-primary" value="Comprar">
                            <input type="button" class="btn btn-default" onclick="location.href='/mercado'" value="Cancelar">
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
   
    <div style="height: 20px;"></div>
</div>