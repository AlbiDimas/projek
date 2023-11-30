<?php

namespace App\Http\Livewire\Customer;
use App\Models\Message as ModelsMessage;

use Livewire\Component;

class Message extends Component
{
    public $first_name, $last_name, $email, $message;

    protected $rules =
    [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ];

    public function store()
    {
        $this->validate();

        ModelsMessage::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        session()->flash('sukses', 'pesan anda berhasil dikirim');
        $this->format();


    }

    public function render()
    {
        return view('livewire.customer.message', [
            'message' => ModelsMessage::latest()->paginate()
        ]);
    }

    public function format()
    {
        unset($this->first_name);
        unset($this->last_name);
        unset($this->email);
        unset($this->message);
    }
}
