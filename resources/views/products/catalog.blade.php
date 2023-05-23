@extends('layouts.layout')
@section('title', 'catalog')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/catalog.css') }}">
@endsection
		
@section('main')
<main>

	<div class="catalog">
		<div class="width">
			<div class="catalog_main">
				<h2>Приставки</h2>
				<div class="catalog_sort">
					<ul>
						<li><a href="{{ route('catalog') }}">По умолчанию</a></li>

						@if ($sort != 'price_desc' && $sort != 'price_asc')
							<li><a href="{{ route('catalog', ['category' => $category ,'sort' => 'price_asc']) }}">По цене</a></li>
						@endif
							@if ($sort == 'price_desc')
								<li><a href="{{ route('catalog', ['category' => $category ,'sort' => 'price_asc']) }}">По цене &#8593;</a></li>
							@endif
							@if ($sort == 'price_asc')
								<li><a href="{{ route('catalog', ['category' => $category ,  'sort' => 'price_desc']) }}">По цене &#8595;</a></li>
							@endif
						
						@if ($sort != 'title_desc' && $sort != 'title_asc')
							<li><a href="{{ route('catalog', ['category' => $category ,'sort' => 'title_asc']) }}">По названию</a></li>
						@endif
						@if ($sort == 'title_desc')
							<li><a href="{{ route('catalog', ['category' => $category ,'sort' => 'title_asc']) }}">По названию &#8593;</a></li>
						@endif
						@if($sort == 'title_asc')
							<li><a href="{{ route('catalog', ['category' => $category ,'sort' => 'title_desc']) }}">По названию &#8595;</a></li>
						@endif
						


					</ul>
				</div>
				<div class="catalog_sort">
					<ul>
						<li><a href="{{ route('catalog', ['category' => 'all', 'sort' => $sort]) }}">Все</a></li>
						<li><a href="{{ route('catalog', ['category' => 'console', 'sort' => $sort]) }}">Приставки</a></li>
						<li><a href="{{ route('catalog', ['category' => 'games', 'sort' => $sort]) }}">Игры</a></li>
						<li><a href="{{ route('catalog', ['category' => 'accessories', 'sort' => $sort]) }}">Аксессуары</a></li>
						
					</ul>
				</div>
				<div class="catalog_products">


					@foreach ($products as $product)
						@if ($product->in_stock)
							<div class="catalog_cart">
								<img src="{{ asset('img/products/' .$product->image) }}" alt="">
									<div class="catalog_text">
										<a href="{{route('catalog.show', $product->id)}}">{{ $product->title }}</a>
										<p>{{ $product->price }} ₽</p>
										<p>{{ $product->category }}</p>
									</div>
							</div>
						@endif
					@endforeach

					
				</div>
			</div>
		</div>
	</div>

</main>
@endsection
