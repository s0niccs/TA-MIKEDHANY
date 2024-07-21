<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Mohithpoojary</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link href="css/stylee.css" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
		<x-auth-session-status class="mb-4" :status="session('status')" />

		<form class="login" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="login__field">
        <i class="login__icon fas fa-user"></i>
        <input type="email" id="email" class="login__input" name="email" :value="old('email')" placeholder="User name / Email" required autofocus autocomplete="username">
    </div>
    <div class="login__field">
        <i class="login__icon fas fa-lock"></i>
        <input type="password" id="password" name="password" class="login__input" placeholder="Password" required autocomplete="current-password">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <button class="button login__submit" class="ms-3">
            {{ __('Log in') }}
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
