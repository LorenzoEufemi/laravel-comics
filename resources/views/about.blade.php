@extends('layouts.master')

@section('content')

<style>
        body {
            background-color: #f8f9fa;
        }
        
    </style>
    <!-- Hero Section -->
@include('partials.jumbo')

<!-- Contenuto principale -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2>La nostra storia</h2>
            <p>Fondata nel 1934, HeroComics ha dato vita a personaggi leggendari che hanno ispirato generazioni di fan. Dalla carta al grande schermo, il nostro universo è in continua espansione.</p>
        </div>
        <div class="col-md-6">
            <h2>Mission e Valori</h2>
            <ul>
                <li><strong>Creatività:</strong> Mondi straordinari che catturano l'immaginazione.</li>
                <li><strong>Diversità:</strong> Storie che rappresentano tutte le persone.</li>
                <li><strong>Innovazione:</strong> Spingiamo oltre i confini del fumetto.</li>
            </ul>
        </div>
    </div>

    <!-- Team -->
    <h2 class="mt-5 text-center">Il nostro team</h2>
    <div class="row text-center team">
        <div class="col-md-4">
           
            <h5>Alex Rossi</h5>
            <p>CEO</p>
        </div>
        <div class="col-md-4">
            
            <h5>Laura Bianchi</h5>
            <p>Head Writer</p>
        </div>
        <div class="col-md-4">
            
            <h5>Marco Verdi</h5>
            <p>Chief Editor</p>
        </div>
    </div>

    <!-- Contatti -->
    <h2 class="mt-5 text-center">Contattaci</h2>
    <p class="text-center">Email: info@herocomics.com | Telefono: +39 123 456 789</p>
</div>



@endsection

