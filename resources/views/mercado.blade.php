@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('opciones')
    <li class="nav-item">
        <a class="nav-link" href="/home">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" style="color: white;" aria-current="page" href="/mercado">Mercado</a>
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
<div style="margin: 100px 0px; width: 100%; height:100%;">
    <section id="user-section" style="width:80%; margin: 100px auto;">
        <div style="display: flex; width: 100%; justify-content:space-between;">
            <h2><b>Mercado</b></h2>
            <form action="/buscar" method="post">
            @csrf
                <div class="form-row">
                    <input type="text" class="form-contro1" name="name">
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
            </form>
        </div>
        <hr>
        <div class="col-xl-12" style="box-sizing:border-box; display:flex; justify-content:space-around; height:100%; flex-wrap: wrap; margin-top:40px">
        @foreach($nfts as $nft)
        <?php     
            $imagen = "img/NFTs/$nft->imagen";
            $id = Crypt::encrypt($nft->id);
            echo "<nft-card autor='$nft->nombre' name='$nft->nombreNFT' img=$imagen price = '$nft->valor' enlace='comprar/{$id}' ></nft-card>";
        ?>   
        @endforeach      
    </section>
    <div style="height: 20px;">
    </div>
</div>