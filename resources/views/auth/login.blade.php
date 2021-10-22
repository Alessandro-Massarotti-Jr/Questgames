    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/cadastro.css">
        <title>login</title>
    </head>
    <body>
        <div class="geral">
        <img class="logo" src="../img/logo.png" alt="">
        <p class="txt_bem">Bem vindo! </p>
        <p class="txt_conta">Conecte em sua conta </p>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="div_cx_txt_email">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="cx_all" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="div_cx_txt_email">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="cx_all" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="div_lembrar">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('lembrar usuario') }}</span>
                </label>
            </div>

            <div class="div_esqueceu">
                @if (Route::has('password.request'))
                    <a class="div_esqueceu1" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
                </div>
                    <x-jet-button class="bt_login">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </div>
    <div class="background"></div>
    </body>
    </html>

        