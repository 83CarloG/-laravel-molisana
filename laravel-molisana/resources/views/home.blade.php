@php
$data = config('pasta');
@endphp

@extends('layouts.main')

@section('title')
	home
@endsection

@section('mainContent')
<!-- _Main -->
<main class="main">
	<div class="container">
		<section class="typeOfPasta">
			<h2 class="typeOfPasta__title">Le lunghe</h2>
			<ul class="typeOfPasta__list">
				@forelse($data as $key => $prodotto)
					@if ($prodotto->tipo == 'lunga')
						<li class="typeOfPasta__item">
							<img class="typeOfPasta__img" src="{{$prodotto->src}}" alt="immagine">
							<a class="typeOfPasta__link" href="prodotti/show/{{$key}}">
								<h3 class="typeOfPasta__text">{{$prodotto->titolo}}</h3>
							</a>
						</li>
					@endif
				@empty
					<li>Formato non presente</li>
				@endforelse
			</ul>
		</section>
		<section class="typeOfPasta">
			<h2 class="typeOfPasta__title">Le corte</h2>
			<ul class="typeOfPasta__list">
				@forelse($data as $key => $prodotto)
					@if ($prodotto->tipo == 'corta')
						<li class="typeOfPasta__item">
							<img class="typeOfPasta__img" src="{{$prodotto->src}}" alt="immagine">
							<a class="typeOfPasta__link" href="prodotti/show/{{$key}}">
								<h3 class="typeOfPasta__text">{{$prodotto->titolo}}</h3>
							</a>
						</li>
					@endif
				@empty
					<li>Formato non presente</li>
				@endforelse
			</ul>
		</section>
		<section class="typeOfPasta">
			<h2 class="typeOfPasta__title">Le cortissime</h2>
			<ul class="typeOfPasta__list">
				@forelse($data as $key => $prodotto)
					@if ($prodotto->tipo == 'cortissima')
						<li class="typeOfPasta__item">
							<img class="typeOfPasta__img" src="{{$prodotto->src}}" alt="immagine">
							<a class="typeOfPasta__link" href="prodotti/show/{{$key}}">
								<h3 class="typeOfPasta__text">{{$prodotto->titolo}}</h3>
							</a>
						</li>
					@endif
				@empty
					<li>Formato non presente</li>
				@endforelse
			</ul>
		</section>
	</div>
</main>
<!-- _/Main -->
@endsection
