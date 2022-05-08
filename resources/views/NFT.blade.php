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
        <a class="nav-link active" style="color: white;" aria-current="page" href="/NFT">Crear&nbspNFT</a>
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
<div style="margin: 80px 0px; width: 100%; height:100%; max-width:1000px;">
    <section id="user-section" style="width:80%; margin: 150px auto;">
        <?php 
            echo "<h2>Bienvenido $nombre</h2>";
            echo "<hr>";
        ?>
        <div class="row">
            <div class="col-xl-12">
                <form action="guardarNFT" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen">
                    </div>
                    <div class="form-group" style="text-align:center">
                        <button class="btn btn-primary" type="submit">Mintear NFT</button>
                    </div>
                </form> 
            </div>
        </div>
    </section>
   
    <div style="height: 20px;"></div>
</div>