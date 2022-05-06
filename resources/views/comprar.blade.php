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
        <img src="public/img/banner.jpg" alt="">
    </div>
    <section id="user-section">
    <h2><b>Venta NFT</b></h2>
    @foreach($nfts as $nft)
    <?php 
                
                $imagen = "public/img/NFTs/$nft->imagen";
                echo "<nft-card-mini autor='Yo' name='$nft->nombre' img=$imagen enlace='vender/$nft->id'></nft-card-mini>";
    ?>
    
    <div class="row">
            <div class="col-xl-12">
                <form action="/compra" method="post">
                    @csrf
                        <div class="form-group">
                            <?php 
                                echo "<input type='hidden' name='id' value = $nft->id>";
                                echo "¿Seguro que quieres comprar este NFT";
                            ?>
                            
                        </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <input type="submit" class="btn btn-primary" value="Comprar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                    </div>
                </form>
            </div>
        </div>
    @endforeach
  
    </section>
   
    <div style="height: 20px;"></div>
</div>