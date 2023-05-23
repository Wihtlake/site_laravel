@extends('layouts.layout')
@section('title', 'registration')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
@endsection
		
@section('main')
<div class="login" style="padding-bottom: 100px">
	<div class="width">
		<div class="login_main">
			<h2>Регистрация</h2>
			<form action="{{ route('register') }}" method="POST">
				@csrf
				<input class="input" type="text" name="name" value="{{ old('name') }}" placeholder="Ваше имя:" autofocus required>
				@error('name')
					<p class="error">{{$message}}</p>
				@enderror
				<input class="input" type="email" name="email" value="{{ old('email') }}" placeholder="Ваш Email:" required>
				@error('email')
					<p class="error">{{$message}}</p>
				@enderror
				<input class="input" type="password" name="password" placeholder="Ваш пароль:" required>
				@error('password')
					<p class="error">{{$message}}</p>
				@enderror
				<input class="input" type="password" name="password_confirmation" placeholder="Повторите пароль:" required> 
				
				<div class="checkbox">
					<input type="checkbox" name="agree" id="agree"> <h3>согласие с правилами регистрации</h3>
				</div>
				@error('agree')
					<p class="error">{{$message}}</p>
				@enderror
				<button type="submit">Вход</button>
			<ul>
				{{-- @foreach ($errors->all() as $message)
					<li>{{ $message }}</li>
				@endforeach --}}
			</ul>
			</form>
		</div>
	</div>
</div>	
@endsection

