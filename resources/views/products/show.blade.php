@extends('layouts.layout')
@section('title', 'cart')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/cart.css') }}">
@endsection
		
@section('main')
<main class="main">
	<div class="cart">
		<div class="width">
			<div class="cart_main">
				<div class="cart_first_block">
					<div class="cart_first_image">
						@if ($Product->image == null)
							<img src="/img/products/images.png" alt="">
						@else
							<img src="{{ asset('img/products/' .$Product->image) }}" alt="">
						@endif
					</div>
					<div class="cart_first_text">
						<h2>{{ $Product->title }}</h2>
						<p>Страна: {{ $Product->country }}</p>
						<p>Год производства: {{ $Product->year }}</p>
						<p>Цена: {{ $Product->price }} ₽</p>
						@if (! $Product->category == null)
							<p>Категория: {{ $Product->category }}</p>
						@endif
						@if ($Product->in_stock)
							<form action="{{ route('basket.add', ['id' => $Product->id])}}" method="post">
								@csrf
								@method('POST')
								<div class="input_cout">
									<h2 class="cart_input_p">Количество</h2>
									<input class="cart_input" type="number" name="quantity"  value="1">
								</div>
								
								<button type="submit" class="button">В корзину</button>
							</form>

						@else
							<a style="color: #ddd">нет в наличии</a>
						@endif
						
					</div>
				</div>
				<div class="cart_second_block">
					<p>Описание: {{ $Product->description }}</p>
				</div>
			</div>
		</div>
	</div>

</main>
@endsection
