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
				<div class="admin_heading"><h2>Товары</h2></div>
				<div class="admin_block">
					@foreach ($Products as $Product)
						<div class="admin_cart">
							<h2>{{ $Product->title }}</h2>
							<div class="admin_cart_second">
								<a href="{{ route('admin.edit', $Product->id) }}">Изменить</a>
								<form action="{{ route('admin.delete', $Product->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<button>
										Удалить
									</button>
								</form>
							</div>
							
						</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
</main>


@endsection


