@extends('layouts.layout')
@section('title', 'basket')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/admin_products.css') }}">
@endsection

@section('main')

<main>
	<div class="admin_products">
		<div class="width">
			<div class="admin_products_index">
				<div class="admin_heading"><h2>Пользователи</h2></div>
				<div class="admin_heading"><h2>Вы: {{ $user_auth->name }}</h2></div>
				
				<div class="admin_block">
					@foreach ($users as $user)
						<div class="admin_cart">
							<h2>{{ $user->name }}</h2>
							<div class="admin_cart_second">
								
							</div>
							
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</main>


@endsection


