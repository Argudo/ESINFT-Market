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
    <h2><b>Mercado</b></h2>

    <div class="row">
    <div class="col-xl-12">
         <form action="/buscar" method="post">
         @csrf
             <div class="form-row">
                  <div class="col-sm-4 my-1">
                       <input type="text" class="form-contro1" name="name">
                  </div>
                  <div class="col-auto my-1">
                       <input type="submit" class="btn btn-primary" value="Buscar">
                  </div>
             </div>
         </form>
    </div>
    <div class="col-xl-12"> ..
    @foreach($nfts as $nft)
    <?php     
                $imagen = "img/NFTs/$nft->imagen";
                $id = Crypt::encrypt($nft->id);
                echo "<nft-card-mini autor='$nft->id' name='$nft->nombre' img=$imagen price = '$nft->valor' enlace='comprar/{$id}' ></nft-card-mini>";
    ?>
   
    @endforeach
        
    </section>
   
    <div style="height: 20px;"></div>
</div>