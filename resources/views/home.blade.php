@extends('layouts.master')




@section('content')
<style>
    
    .section-bottom {
        background-color: #0282F9 ;
        height: 100px;
        gap: 100px;
    }
    .section-bottom img {
       width: 30px;
    }
</style>
@include('partials.jumbo')
    <section class=" bg-dark">
      <div class="container">
        <div class="row row-cols-3 row-cols-md-4 row-cols-lg-6 g-4">
            @foreach ($comics as $comic)
            <div class="col" >
               <x-card>
                  <x-slot:img>{{ $comic['thumb'] }}</x-slot>
                  <x-slot:titolo>{{ $comic['series'] }}</x-slot>
               </x-card>
            </div>
            @endforeach
        </div>
      </div>
    </section>

    <section class="section-bottom d-flex justify-content-center align-items-center">
        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
         <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
       
        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
        
    </section>
    
    
    
    
@endsection