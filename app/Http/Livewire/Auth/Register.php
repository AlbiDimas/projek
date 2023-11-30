<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    protected $rules =
    [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required | confirmed',

    ];

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        Auth::login($user, true);
        // event(new Registered($user));
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.register')
        ->extends('templates.auth')
        ->section('content');
    }
}
