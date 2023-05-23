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
				<h2>изменить</h2>
				<form action="{{ route('admin.update', ['Product' => $Product->id])  }}" method="POST">
					@csrf
					@method('PUT')
					<input class="input" name="image" placeholder="Src Картинки:  " value="{{ $Product->image }}">
					<input class="input" name="title" 	placeholder="Имя товара:"	 value="{{ $Product->title }}"	>
					<input class="input" name="country"  placeholder="Страна изготовления:"	 value="{{ $Product->country }}"	>
					<input class="input" name="year" 	placeholder="Год производства:"	 value="{{ $Product->year }}"	>
					<input class="input" name="price" 	placeholder="Цена:"	 value="{{ $Product->price }}"	>
					<input class="input" name="description" placeholder="Описание:" value="{{ $Product->description }}"	>
					<input class="input" name="in_stock" type=""	placeholder="В наличии:" value="{{ $Product->in_stock }}"	>
					<button type="submit">Изменить</button>
				</form>
			</div>
		</div>
	</div>	

	</main>
@endsection

@section('js')
<script>
    image.onchange = function(event) {
    var target = event.target;

    if (!FileReader) {
        alert('FileReader не поддерживается — облом');
        return;
    }

    if (!target.files.length) {
        alert('Ничего не загружено');
        return;
    }

    var fileReader = new FileReader();
    fileReader.onload = functino() {
        img1.src = fileReader.result;
    }

    fileReader.readAsDataURL(target.files[0]);
}
</script>

@endsection
