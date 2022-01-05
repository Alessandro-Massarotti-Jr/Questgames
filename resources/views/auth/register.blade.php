<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="login">
        <div class="imagem"> <img src="/img/Flogin.png" alt=""> </div>
        <div class="geral">
            <img class="logo" src="../img/logo.png" alt="">
            <p class="txt_criar">Criar conta </p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="div_cx_txt_email">
                    <label for="usuario" value="{{ __('usuario') }}">Nome</label>
                    <input id="usuario" class="cx_all" type="text" name="name" :value="old('name')" required
                        autofocus autocomplete="name" />
                </div>

                <div class="div_cx_txt_email">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="cx_all" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="div_cx_txt_email">
                    <x-jet-label for="password" value="{{ __('Senha') }}" />
                    <x-jet-input id="password" class="cx_all" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="div_cx_txt_email">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmar senha</label>
                    <input id="password_confirmation" class="cx_all" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="cxglobal">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div>
                    <x-jet-button class="bt_login">
                        {{ __('cadastrar conta') }}
                    </x-jet-button>
                </div>
                
</body>

</html>
