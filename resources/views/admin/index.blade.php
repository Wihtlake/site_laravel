@extends('layouts.layout')
@section('title', 'basket')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
@endsection

@section('main')
<main>
	<div class="admin">
		<div class="width">
			<div class="admin_main">
				<h2>Панель администратора</h2>
				<div class="admin_block">
					<div class="admin_cart">
						<h3>Создать товар</h3>
						<a href="{{ route('admin.create') }}">Перейти</a>
					</div>
					<div class="admin_cart">
						<h3>Изменить товары</h3>
						<a href="{{ route('admin.products') }}">Перейти</a>
					</div>
					<div class="admin_cart">
						<h3>Пользователи</h3>
						<a href="{{ route('admin.users') }}">Перейти</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


@endsection