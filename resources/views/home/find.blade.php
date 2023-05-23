@extends('layouts.layout')
@section('title', 'home')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/find.css') }}">
@endsection
		
@section('main')
<main class="main">
	<div class="find">
		<div class="width">
			<div class="find_main">
				<div class="find_first_block">
					<div class="find_first_image">
						<img src="/img/Rectangle 166.png" alt="">
					</div>
					<div class="find_first_text">
						<h2>Наши контакты</h2>
						<p>Адрес: г. Тюмень, ул. Рылеева, 34</p>
						<p>Телефон: 8-999-888-77-66</p>
						<p>E-mail: True@games</p>
					</div>
				</div>
				<div class="find_second_block">
					<p>Мы рады приветствовать вас в нашем магазине, пишите, звоните, приходите! Наши консультанты выслушают ваши пожелания и подберут игровую приставку или аксессуары по вашим вкусам! Менеджеры по телефону также проконсультируют вас по любым вопросам.</p>
				</div>
			</div>
		</div>
	</div>

</main>
@endsection


