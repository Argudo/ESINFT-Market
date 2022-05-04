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
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Guardar">
    <input type="reset" class="btn btn-default" value="Cancelar">
</div>
</form>
</div>
</div>
        
    </section>
   
    <div style="height: 20px;"></div>
</div>