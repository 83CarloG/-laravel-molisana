@extends('layouts.main')
@section('title')
    //
@endsection
@section('mainContent')
<div class="main-prodotti">
    <div class="container">
        <h1 class="main-prodotti__title">{{$data->titolo}}</h1>
        <div class="main-prodotti__figure">
            <img class="main-prodotti__image" src="{{$data->srch}}" alt="#">
        </div>
        <div class="main-prodotti__figure">
            <img class="main-prodotti__image" src="{{$data->srcp}}" alt="#">
        </div>
        <p class="main-prodotti__text">
            {!!$data->descrizione!!}
        </p>

    @if ($id > 0)
        <div class="main-prodotti__link main-prodotti__link--sx">
            <a href="{{route('prodotti-singoli', $id - 1)}}"><i class="main-prodotti__icon fas fa-angle-left"></i></a>
        </div>
    @endif
    @if ($id < $length - 1)
        <div class="main-prodotti__link main-prodotti__link--dx">
            <a href="{{route('prodotti-singoli', $id + 1)}}"><i class="main-prodotti__icon fas fa-angle-right"></i></a>
        </div>
    @endif
    </div>
</div>

@endsection
