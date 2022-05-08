@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('contenido')
<div style="margin: 100px 0px; width: 100%; height:100%;">
    <section id="user-section" style="width:80%; margin: 150px auto;">
        <h2><b>Mi baúl de NFTs</b></h2>
        <div style="box-sizing:border-box; display:flex; justify-content:space-around; height:100%; flex-wrap: wrap">
            @foreach($nfts as $nft)
                <?php 
                    $imagen = "img/NFTs/$nft->imagen";
                    $id = Crypt::encrypt($nft->id);
                    echo "<nft-card autor='Yo' name='$nft->nombreNFT' img=$imagen enlace='vender/{$id}'></nft-card>";
                ?>
            @endforeach
        </div>
    </section>
    <div style="height: 20px;"></div>
</div>

