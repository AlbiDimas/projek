<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori as ModelsKategori;
use Livewire\WithPagination;
use Illuminate\Support\Str;



class Kategori extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $create, $edit, $nama, $slug, $kategori_id, $search;

    protected $rules =
    [
        'nama' => 'required'
    ];

    public function create()
    {
        $this->create = true;
    }

    public function store()
    {
        $this->validate();

        ModelsKategori::create([

            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)

        ]);

        session()->flash('sukses', 'Kategori Berhasil Ditambahkan');
        $this->format();


    }

    public function edit(ModelsKategori $kategori)
    {
        $this->edit = true;
        $this->nama = $kategori->nama;
        $this->kategori_id = $kategori->id;

     }

    public function update(ModelsKategori $kategori)
    {
        $this->validate();

        $kategori->update([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Kategori Berhasil Diupdate');
        $this->format();

    }

    public function render()
    {
        if ($this->search) {
            $kategori = ModelsKategori::latest()->where('nama', 'like', '%' . $this->search . '%')->paginate(3);
        } else {
            $kategori = ModelsKategori::latest()->paginate(5);
        }


        return view('livewire.kategori', [
            'kategori' => $kategori
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->nama);
        unset($this->edit);

    }
}
