@extends('layouts.main')
@section('title')
    //
@endsection
@section('mainContent')
<div class="main-prodotto">
    <div class="container">
        <h1 class="main-prodotto__title">{{$data->titolo}}</h1>
        <div class="main-prodotto__figure">
            <img class="main-prodotto__image" src="{{$data->srch}}" alt="#">
        </div>
        <div class="main-prodotto__figure">
            <img class="main-prodotto__image" src="{{$data->srcp}}" alt="#">
        </div>
        <p class="main-prodotto__text">
            {!!$data->descrizione!!}
        </p>

    @if ($id > 0)
        <div class="main-prodotto__link main-prodotto__link--sx">
            <a href="{{route('prodotto-singolo', $id - 1)}}"><i class="main-prodotto__icon fas fa-angle-left"></i></a>
        </div>
    @endif
    @if ($id < $length - 1)
        <div class="main-prodotto__link main-prodotto__link--dx">
            <a href="{{route('prodotto-singolo', $id + 1)}}"><i class="main-prodotto__icon fas fa-angle-right"></i></a>
        </div>
    @endif
    </div>
</div>

@endsection
