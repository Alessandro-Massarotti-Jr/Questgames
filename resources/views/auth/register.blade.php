<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cadastro.css">
    <title>Teste</title>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="label">
            <label for="name" value="{{ __('Name') }}">Nome</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="label">
            <label for="email" value="{{ __('Email') }}" >Email</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="label">
            <label for="password" value="{{ __('Password') }}" >Senha</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="label">
            <label for="password_confirmation" value="{{ __('Confirm Password') }}" >Confirmar senha</label>
            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="cxglobal">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms"/>

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
        @endif

        <div class="label">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button class="btn">
                {{ __('Register') }}
            <button>
        </div>
        <div class="background"></div>
</body>

</html>
