@extends('layouts.layout')
@section('title', 'basket')
@section('css')
	<link rel="stylesheet" href="/css/admin_create.css">
@endsection

@section('main')
<main>
	<div class="admin">
		<div class="width">
			<div class="admin_main">
				<h2>Создать</h2>
				<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<input class="input" type="text" name="image" placeholder="URL изображения: ">
					<input class="input" type="text" name="title" placeholder="Имя товара:">
					<input class="input" type="text" name="country" placeholder="Страна изготовления:">
					<input class="input" type="number" name="year" placeholder="Год производства:">
					<input class="input" type="number" name="price" placeholder="Цена:">
					<input class="input" type="text" name="description" placeholder="Описание:">
					<select name="category" class="input">
						<option value="console">console</option>
						<option value="games">Games</option>
						<option value="accessories">accessories</option>
					</select>
					<button type="submit">Создать</button>
				</form>
			</div>
		</div>
	</div>	

	</main>
@endsection

