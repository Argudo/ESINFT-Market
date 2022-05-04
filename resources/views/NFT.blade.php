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
            <?php 
                echo "Bienvenido anom";
                echo "";
                ?>
        <div class="row">
        <div class="col-xl-12">
        <form action="guardarNFT" enctype="multipart/form-data" method="POST">
   @csrf    
   <input type="text" name="nombre" placeholder="ingrese nombre de NFT:">
   <input type="file" name="imagen">
   <button type="submit">GUARDAR</button>
</form> 
</div>
</div>
        
    </section>
   
    <div style="height: 20px;"></div>
</div>