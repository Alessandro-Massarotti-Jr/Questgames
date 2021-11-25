<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            
            'name' => $input['name'],
            'email' => $input['email'],
            'profile_photo_path' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_photo_path'=>'default.png',
            'user_desc'=>'Escreva algo aqui',
            'post1'=>'default_publi.png',
            'post2'=>'default_publi.png',
            'post3'=>'default_publi.png',
            'post4'=>'default_publi.png',
        ]);
    }
}
