<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa password? jangan khawatir. Isi kotak dibawah dengan email yang sudah terdaftar dan kami akan memberikan link untuk mengubah passwordmu menjadi yang baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<!-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Mohithpoojary</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link href="css/stylee.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
		<x-auth-session-status class="mb-4" :status="session('status')" />
		<form class="login">
        <div class="mb-4 text-sm text-gray-900">
        {{ __('Lupa password? jangan khawatir. Isi kotak dibawah dengan email yang sudah terdaftar dan kami akan memberikan link untuk mengubah passwordmu menjadi yang baru.') }}
        <div class="login__field">
			<i class="login__icon fas fa-at"></i>
			<input for="email" :value="__('Email')" type="email" id="email" class="login__input" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="email">
			<x-input-error :messages="$errors->get('email')" class="mt-2" />
		</div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="button login__submit" class="ms-3">
                {{ __('Email Password Reset Link') }}
            <i class="button__icon fas fa-chevron-right"></i>
            </x-primary-button>
        </div>
    </div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
  
</body>
</html> -->


