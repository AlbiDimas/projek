<?php

namespace App\Http\Livewire;
use App\Models\DataLahan as ModelsDataLahan;
use Livewire\WithPagination;
use Livewire\Component;
use Livewire\WithFileUploads;

class DataLahan extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    protected $rules =
    [
        'lokasi_lahan' => 'required',
        'luas_lahan' => 'required',
        'penanggung_jawab' => 'required',
        'foto_lahan' => 'required',
    ];

    public $lokasi_lahan, $luas_lahan, $penanggung_jawab, $foto_lahan;
    public $create, $show_img;

    public function create()
    {
        $this->create = true;
    }

    public function store()
    {
        $this->validate();
        $filename = $this->foto_lahan->store('foto_lahan', 'public');

        ModelsDataLahan::create([
            'lokasi_lahan' => $this->lokasi_lahan,
            'luas_lahan' => $this->luas_lahan,
            'penanggung_jawab' => $this->penanggung_jawab,
            'foto_lahan' => $filename,

        ]);
        $this->format();
        session()->flash('sukses', 'Data Berhasil Ditambahkan');
    }

    public function show_img(ModelsDataLahan $data_lahan)
    {
        $this->show_img = true;
        $this->foto_lahan = $data_lahan->foto_lahan;
    }



    public function render()
    {
        return view('livewire.data-lahan', [
            'data_lahan' => ModelsDataLahan::latest()->paginate(10)
        ]);
    }
    public function format()
    {
        unset($this->create);
        unset($this->lokasi_lahan);
        unset($this->luas_lahan);
        unset($this->penanggung_jawab);
        unset($this->foto_lahan);
        unset($this->show_img);

    }
}
