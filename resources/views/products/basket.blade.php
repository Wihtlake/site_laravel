@extends('layouts.layout')
@section('title', 'basket')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/basket.css') }}">
@endsection
		
@section('main')
<main>
	<div class="basket">
		<div class="width">
			<div class="basket_main">
				<div class="basket_heading"><h2>Корзина {{ $user_auth->name }}</h2></div>
					
				<div class="basket_block">
					@foreach ($carts as $cart)
					@if ($user_auth->id ==  $cart->user_id)
					<div class="basket_cart">
						<div class="basket_cart_block">
							<a href="{{ route('catalog.show', $cart->products->id) }}">{{$cart->products->title}}</a>
						</div>
						<div class="basket_cart_block">
							<p>{{$cart->products->price}}р</p>
							<p>товаров: {{ $cart->quantity  }}</p>
							<form action="{{ route('basket.destroy', $cart) }}" method="POST">
								@csrf
								@method('DELETE')
								<button>Удалить</button>
							</form>
						</div>
					</div>
					@endif
					@endforeach

					@if ($carts->where('user_id', $user_auth->id)->sum('quantity') > 0)
						<div class="basket_accept">
							<p>Сумма всех товаров: {{ $carts->where('user_id', $user_auth->id)->sum(function ($cart) {
								return $cart->quantity * $cart->products->price;
							}) }} Р</p>
							<a href="#">оформить</a>
						</div>
						@else
						<h2 style="text-align: center">корзина пуста</h2>
					@endif
						{{-- <div class="basket_accept">
							<p>Сумма всех товаров:  {{  $cart->quantity * $cart->products->price }}</p>
							<a href="#">оформить</a>
						</div> --}}
						
				</div>
			</div>
		</div>
	</div>

</main>
@endsection
