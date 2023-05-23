@extends('layouts.layout')
@section('title', 'login')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
@endsection
		
@section('main')
<main>
	<div class="login">
		<div class="width">
			<div class="login_main">
				<h2>Вход</h2>
				<form action="{{ route('login') }}" method="POST">
					@csrf
					<input class="input" type="email" name="email" value="{{ old('email') }}" placeholder="Ваш Email: " autofocus>
					@error('email')
					<p class="error">{{$message}}</p>
					@enderror
					
					<input class="input" type="password" name="password" placeholder="Ваш пароль:" required>
					<button type="submit">Вход</button>
				</form>
			</div>
		</div>
	</div>		
	
 	</main>
@endsection