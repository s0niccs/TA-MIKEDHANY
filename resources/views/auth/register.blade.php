<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Mohithpoojary</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link href="css/styler.css" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
		<x-auth-session-status class="mb-4" :status="session('status')" />
		<form class="login" method="POST" action="{{ route('register') }}">
			@csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" id="name" class="login__input" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name">
					<x-input-error :messages="$errors->get('name')" class="mt-2" />
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-at"></i>
					<input type="email" id="email" class="login__input" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username">
					<x-input-error :messages="$errors->get('email')" class="mt-2" />
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" id="alamat" class="login__input" name="alamat" :value="old('alamat')" placeholder="Alamat" required autofocus autocomplete="alamat">
					<x-input-error :messages="$errors->get('alamat')" class="mt-2" />
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" required autocomplete="new-password" id="password" name="password" class="login__input" placeholder="Password">
					<x-input-error :messages="$errors->get('password')" class="mt-2" />
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" required autocomplete="new-password" id="password" name="password_confirmation" class="login__input" placeholder="Confirm Password">
					<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
				</div>
					<!-- Remember Me -->
					<div class="block mt-4">
						
					</div>
					<div class="flex items-center justify-end mt-4">
						
					<button class="button login__submit" class="ms-3">
						{{ __('REGISTER') }}
						<i class="button__icon fas fa-chevron-right"></i>
					</button>	
					</div>
				</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
