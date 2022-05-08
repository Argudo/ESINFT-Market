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
        <a class="nav-link active" style="color: white;" aria-current="page" href="/perfil">Perfil</a>
@endsection

@section('contenido')
<div style="margin: 80px 0px; width: 100%; height:100%; max-width:1000px;">
    <section id="user-section" style="padding: 50px;">
            <?php
                echo "<h2>Bienvenido $nombre</h2>";
                echo "<br>";
                echo "<h2>Tu saldo es de $saldo</h2>";
            ?>
        <div class="row">
            <div class="col-xl-12">
                <form action="actualizar" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="apellidos" maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" maxlength="30">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Añadir saldo</label>
                            <input type="text" class="form-control" name="saldo" maxlength="8">
                        </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                    </div>
                </form>
            </div>
        </div>
    </section>
   
    <div style="height: 20px;"></div>
</div>