<?php

namespace App\Http\Livewire;
use App\Models\Buatmesin as ModelsBuatmesin;
use Livewire\Component;

class Buatmesin extends Component
{
    public function render()
    {
        return view('livewire.buatmesin', [
            'buatmesin' => ModelsBuatmesin::latest()->paginate(10)
        ]);
    }
}
