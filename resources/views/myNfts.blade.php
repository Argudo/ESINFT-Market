@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('contenido')
<div style="margin: 100px 0px; width: 100%; height:100%">
    <section id="user-section" style="width:80%; margin: 150px auto;">
        <h2><b>Mi baul de NFTs</b></h2>
        @foreach($nfts as $nft)
        <?php 
            $imagen = "img/NFTs/$nft->imagen";
            echo "<nft-card-mini autor='Yo' name='$nft->nombre' img=$imagen enlace='vender/{$nft->id}'></nft-card-mini>";
        ?>
        @endforeach
    </section>
    <div style="height: 20px;"></div>
</div>

