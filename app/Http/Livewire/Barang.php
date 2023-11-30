<?php

namespace App\Http\Livewire;
use App\Models\Barang as ModelsBarang;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Barang extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete, $search, $show_img,  $nama, $jumlah, $stock, $deskripsi, $kategori, $foto;
    public $kategori_id, $barang_id;


    protected $rules =
    [
        'nama' => 'required',
        'jumlah' => 'required',
        'stock' => 'required',
        'kategori' => 'required',
        'deskripsi' => 'required',
        'foto' => 'required'
    ];

    protected $validationAttributes =
    [
        'kategori_id' => 'kategori'
    ];

    public function create()
    {
        $this->create = true;
        $this->kategori = Kategori::all();
        //dd($this->create);
    }

    public function store()
    {
        $this->validate();
        $filename = $this->foto->store('foto', 'public');
        //dd($this->nama);
        ModelsBarang::create([
            'barang_nama' => $this->nama,
            'jumlah' => $this->jumlah,
            'barang_stock' => $this->stock,
            'kategori_id' => $this->kategori_id,
            'foto' => $filename,
            'barang_deskripsi' => $this->deskripsi
        ]);

        session()->flash('sukses', 'Barang Berhasil Ditambah');
        $this->format();

    }

    public function edit(ModelsBarang $barang)
    {
       // dd($barang);

       $this->edit = true;
       $this->kategori = Kategori::all();
       $this->nama = $barang->barang_nama;
       $this->foto = $barang->foto;
       $this->jumlah = $barang->jumlah;
       $this->stock = $barang->barang_stock;
       $this->deskripsi = $barang->barang_deskripsi;
       $this->kategori_id = $barang->kategori_id;
       $this->barang_id = $barang->id;
    }

    public function update(ModelsBarang $barang)
    {
        $this->validate();
        $filename = $this->foto->store('foto', 'public');
        $barang->update([

            'barang_nama' => $this->nama,
            'foto' => $filename,
            'jumlah' => $this->jumlah,
            'barang_stock' => $this->stock,
            'kategori_id' => $this->kategori_id,
            'barang_deskripsi' => $this->deskripsi

        ]);

        session()->flash('sukses', 'Barang Berhasil Diupdate');
        $this->format();
    }

    public function delete($id)
    {
        //unlink(public_path('public/storage' . $this->foto));
        //dd($barang);
        $this->format();

        $this->delete = true;
        $this->barang_id = $id;


    }

    public function destroy(ModelsBarang $barang)
    {
        //unlink(public_path('storage/' . $this->foto));
        $barang->delete();

        session()->flash('sukses', 'Barang Berhasil Dihapus');
        $this->format();

    }

    public function show_img(ModelsBarang $barang)
    {
        // dd($barang->id);
        $this->format();
        $this->show_img = true;
        $this->foto = $barang->foto;
    }


    public function render()
    {
        if ($this->search) {
            $barang = ModelsBarang::latest()->where('barang_nama', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $barang = ModelsBarang::latest()->paginate(10);
        }


        return view('livewire.barang', [
            'barang' => $barang
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->nama);
        unset($this->jumlah);
        unset($this->stock);
        unset($this->deskripsi);
        unset($this->kategori_id);
        unset($this->edit);
        unset($this->foto);
        unset($this->delete);
        unset($this->show_img);
    }
}
