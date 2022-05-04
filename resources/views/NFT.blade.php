@extends('layouts.header')

@push('styles')
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
@endpush

@section('contenido')
<div style="margin: 80px 0px; width: 100%; height:100%; max-width:1000px;">
    <section id="user-section" style="width:80%; margin: 150px auto;">
        <?php 
            echo "<h2>Bienvenido anon</h2>";
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