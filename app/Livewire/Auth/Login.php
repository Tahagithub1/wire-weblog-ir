<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $data = [
     'email' => '',
     'password' => '',
     'remamber' => false
    ];
    public function login()  {

        $this->validate([
          'data.email' => 'required|email',
          'data.password' => 'required|string|regex:/^[a-zA-Z0-9@$#^%&*!]+$/u'
        ]);
        if(Auth::attempt([
            'email' => $this->data['email'],
            'password' => $this->data['password']
        ] , $this->data['remamber'] )){
            return redirect()->to('/');
        }

    }
    public function render()
    {

        return view('livewire.auth.login');
    }
}

