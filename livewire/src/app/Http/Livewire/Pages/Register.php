<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $email = '';

    public $name = '';

    public $password = '';

    public $passwordConfirmation = '';

    public function render()
    {
        return view('livewire.pages.register')
                ->layout('layouts.register');

    }

    public function register(){

        $data = $this->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:6|same:passwordConfirmation',
        ]);

        $user= User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);


        auth()->login($user);

        return redirect(route('public.signup'));
    }
}
