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
						<li>
							<img src="{{$prodotto->src}}" alt="immagine">
							<a href="prodotti/show/{{$key}}">
								<h3>{{$prodotto->titolo}}</h3>
							</a>
						</li>
					@endif
				@empty
					<li>Formato non presente</li>
				@endforelse
			</ul>
		</section>
		<section class="typeOfPasta">
			<h2>Le corte</h2>
			<ul class="typeOfPasta__list">
				@forelse($data as $key => $prodotto)
					@if ($prodotto->tipo == 'corta')
						<li>
							<img src="{{$prodotto->src}}" alt="immagine">
							<a href="prodotti/show/{{$key}}">
								<h3>{{$prodotto->titolo}}</h3>
							</a>
						</li>
					@endif
				@empty
					<li>Formato non presente</li>
				@endforelse
			</ul>
		</section>
		<section class="typeOfPasta">
			<h2>Le cortissime</h2>
			<ul class="typeOfPasta__list">
				@forelse($data as $key => $prodotto)
					@if ($prodotto->tipo == 'cortissima')
						<li>
							<img src="{{$prodotto->src}}" alt="immagine">
							<a href="prodotti/show/{{$key}}">
								<h3>{{$prodotto->titolo}}</h3>
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
