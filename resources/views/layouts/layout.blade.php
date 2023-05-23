<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
	@yield('css')
	<title>	@yield('title')</title>
</head>
<body>
<header class="header">
		<div class="width">
		<div class="header_first_block">
			<div class="header_first_item">
				<div class="header_first_item_i"><a href="{{ route('home') }}"><img src="/img/2496078-восстановлено 1.png" alt=""></a> </div>
			</div>
			<div class="header_first_item">
				@guest
					<a href="{{ route('register') }}">Регистрация</a>
					<a href="{{ route('login') }}">Войти</a>
				@endguest

				@auth
					<a href="#">{{auth()->user()->name}}</a>
					<a href="{{ route('logout') }}">Выйти</a>
					
				@endauth


				
			</div>
		</div>
	</div>
	<hr class="line">
	<div class="width">
		<div class="header_second_block">
			<ul>
				<li><a href="{{ route('catalog') }}">Каталог</a></li>
				<li><a href="{{ route('home')}}">О нас</a></li>
				<li><a href="{{ route('find') }}">Где нас найти</a></li>
				<li><a href="{{ route('basket.index')}}">Корзина</a></li>
			</ul>
		</div>
	</div>
	@auth
		@if ( auth()->user()->admin)
		<hr class="line">
			<div class="header_second_block">
				<ul>
					<li><a href="{{ route('admin.index') }}">Админ панель</a></li>
					
				</ul>
			</div>
		@endif
	@endauth
	
	

	
	</header>

	@yield('main')
	@yield('js')

</body>
</html>