<?php

namespace App\Http\Livewire\Customer;

use App\Models\Pendaftaran as ModelsPendaftaran;
use App\Models\Perusahaan as ModelsPerusahaan;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pendaftaran extends Component
{
    use WithFileUploads;

    protected $rules =
    [
        'nama' => 'required',
        'asal_sekolah' => 'required',
        'kontak' => 'required',
        'alamat' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required',
        'perusahaan_id' => 'required',
        'identitas' => 'required',
    ];

    protected $validationAttributes =
    [
        'perusahaan_id' => 'perusahaan'
    ];

    public $create,  $nama, $asal_sekolah, $kontak, $alamat, $tempat_lahir, $tgl_lahir, $perusahaan_id, $identitas, $search;
    public $perusahaan;
    public function create() {
        $this->create = true;
        $this->perusahaan = ModelsPerusahaan::all();
    }

    

    public function store()
    {
       
        $this->validate();
        $filename = $this->identitas->store('identitas', 'public');

        ModelsPendaftaran::create([
            'nama' => $this->nama,
            'asal_sekolah' => $this->asal_sekolah,
            'kontak' => $this->kontak,
            'alamat' => $this->alamat,
            'tempat_lahir' => $this->tempat_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'perusahaan_id' => $this->perusahaan_id,
            'identitas' => $filename,
        ]);
        session()->flash('sukses', 'Pendaftaran berhasil, nomor anda akan segera dihubungi oleh admin');
        $this->format();


    }
    public function render()
    {
        if ($this->search) {
            $pendaftaran = ModelsPendaftaran::latest()->where('nama', 'like', '%' .$this->search. '%')
            ->orWhere('asal_sekolah', 'like', '%' .$this->search. '%')
            ->paginate(12);
        }
        else {
            $pendaftaran = ModelsPendaftaran::latest()->paginate(12);
        }

        return view('livewire.customer.pendaftaran', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    public function format()
    {
        unset($this->nama);
        unset($this->asal_sekolah);
        unset($this->kontak);
        unset($this->alamat);
        unset($this->tempat_lahir);
        unset($this->tgl_lahir);
        unset($this->perusahaan_id);
        unset($this->identitas);
        unset($this->create);
    }

	
}
