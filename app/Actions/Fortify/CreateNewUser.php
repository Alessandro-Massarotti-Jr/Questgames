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
            'profile_photo_path'=>'/img/default.png',
            'user_desc'=>$input['email'],
            'post1'=>'/img/souls meme.jpeg',
            'post2'=>'/img/souls meme.jpeg',
            'post3'=>'/img/souls meme.jpeg',
            'post4'=>'/img/souls meme.jpeg',
        ]);
    }
}
