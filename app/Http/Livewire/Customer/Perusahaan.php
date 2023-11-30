<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Perusahaan as ModelsPerusahaan;

class Perusahaan extends Component
{
    public $show;
    public $pt_nama, $pt_logo, $pt_alamat, $pt_bidang;

    public function show(ModelsPerusahaan $perusahaan)
    {
        $this->format();
        $this->show = true;


        $this->pt_logo = $perusahaan->pt_logo;
        $this->pt_nama = $perusahaan->pt_nama;
        $this->pt_alamat = $perusahaan->pt_alamat;
        $this->pt_bidang = $perusahaan->pt_bidang;

    }

    public function render()
    {
        return view('livewire.customer.perusahaan', [
            'perusahaan' => ModelsPerusahaan::latest()->paginate(12)
        ]);
    }

    public function format()
    {
        unset($this->show);
    }
}
