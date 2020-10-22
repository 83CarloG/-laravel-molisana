@extends('layouts.main')
@section('title')
    //
@endsection
@section('mainContent')
<div class="main-prodotti">
    <div class="container">
        <h1 class="main-prodotti__title">{{$data['titolo']}}</h1>
        <div class="main-prodotti__figure">
            <img class="main-prodotti__image" src="{{$data['src-h']}}" alt="#">
        </div>
        <div class="main-prodotti__figure">
            <img class="main-prodotti__image" src="{{$data['src-p']}}" alt="#">
        </div>



        <p class="main-prodotti__text">
            {!!$data['descrizione']!!}
        </p>
    <div>
       <a href="/prodotti/show/"><i class="main-prodotti__icon fas fa-angle-left"></i></a>
    </div>
    <div>
        <a href="/prodotti/show/"><i class="main-prodotti__icon fas fa-angle-right"></i></a>
    </div>
    </div>
</div>

@endsection
