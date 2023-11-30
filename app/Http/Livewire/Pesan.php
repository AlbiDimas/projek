<?php

namespace App\Http\Livewire;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Pesan extends Component
{
    public $show;
    public $pesan;

    protected $rules =
    [
        'message' => 'required'
    ];

    public function show(ModelsMessage $message)
    {
        // dd($message->id);
        $this->format();
        $this->show = true;
        $this->pesan = $message->message;

    }

    public function render()
    {
        return view('livewire.pesan', [
            'message' => ModelsMessage::latest()->paginate(10)
        ]);
    }

    public function format()
    {
        unset($this->show);
        unset($this->first_name);
        unset($this->last_name);
        unset($this->email);
        unset($this->message);

    }
}
