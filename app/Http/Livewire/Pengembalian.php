<?php

namespace App\Http\Livewire;
use App\Models\Pengembalian as ModelsPengembalian;
use Livewire\Component;
use App\Models\Barang;
use App\Models\Kondisi;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Pengembalian extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $show, $show_barang, $tgl_pengembalian, $barang_id, $penyewa, $kontak, $foto_barang, $kondisi_id, $qty, $pengembalian_id, $search;
    public $barang, $kondisi;

    protected $rules =
    [
        'tgl_pengembalian' => 'required',
        'barang_id' => 'required',
        'penyewa' => 'required',
        'kontak' => 'required',
        'foto_barang' => 'required',
        'kondisi_id' => 'required',
        'qty' => 'required'
    ];

    protected $validationAttributes =
    [
        'barang_id' => 'barang',
        'kondisi_id' => 'kondisi'
    ];

    public function create()
    {
        $this->create = true;
        $this->barang = Barang::all();
        $this->kondisi = Kondisi::all();

    }

    public function store()
    {
        $this->validate();
        $filename = $this->foto_barang->store('foto_barang', 'public');

        ModelsPengembalian::create([
            'tgl_pengembalian' => $this->tgl_pengembalian,
            'barang_id' => $this->barang_id,
            'penyewa' => $this->penyewa,
            'kontak' => $this->kontak,
            'foto_barang' => $filename,
            'kondisi_id' => $this->kondisi_id,
            'qty' => $this->qty
        ]);

        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->format();
    }

    public function render()
    {
        if ($this->search) {
            $pengembalian = ModelsPengembalian::latest()->where('tgl_pengembalian', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $pengembalian = ModelsPengembalian::latest()->paginate(10);
        }


        return view('livewire.pengembalian', [
            'pengembalian' => $pengembalian
        ]);
    }

    public function edit(ModelsPengembalian $pengembalian)
    {
        //dd($pengembalian->id);
        $this->edit = true;
        $this->barang = Barang::all();
        $this->kondisi = Kondisi::all();
        $this->tgl_pengembalian = $pengembalian->tgl_pengembalian;
        $this->barang_id = $pengembalian->barang_id;
        $this->penyewa = $pengembalian->penyewa;
        $this->kontak = $pengembalian->kontak;
        $this->foto_barang = $pengembalian->foto_barang;
        $this->kondisi_id = $pengembalian->kondisi_id;
        $this->qty = $pengembalian->qty;
        $this->pengembalian_id = $pengembalian->id;

    }

    public function update(ModelsPengembalian $pengembalian)
    {
        $this->validate();
        $filename = $this->foto_barang->store('foto_barang', 'public');

        $pengembalian->update([

            'tgl_pengembalian' => $this->tgl_pengembalian,
            'barang_id' => $this->barang_id,
            'penyewa' => $this->penyewa,
            'kontak' => $this->kontak,
            'foto_barang' => $filename,
            'kondisi_id' => $this->kondisi_id,
            'qty' => $this->qty
        ]);

        session()->flash('sukses', 'Data Berhasil Diupdate');
        $this->format();
    }

    public function show(ModelsPengembalian $pengembalian)
    {
        $this->format();
        $this->show = true;


        $this->tgl_pengembalian = $pengembalian->tgl_pengembalian;
        $this->barang = $pengembalian->barang->barang_nama;
        $this->penyewa = $pengembalian->penyewa;
        $this->kontak = $pengembalian->kontak;
        $this->foto_barang = $pengembalian->foto_barang;
        $this->kondisi = $pengembalian->kondisi->kondisi;
        $this->qty = $pengembalian->qty;
    }

    public function show_barang(ModelsPengembalian $pengembalian)
    {
        $this->format();
        $this->show_barang = true;
        $this->foto_barang = $pengembalian->foto_barang;
    }

    public function format()
    {
        unset($this->create);
        unset($this->tgl_pengembalian);
        unset($this->barang_id);
        unset($this->penyewa);
        unset($this->kontak);
        unset($this->foto_barang);
        unset($this->kondisi);
        unset($this->qty);
        unset($this->edit);
        unset($this->show);
        unset($this->show_barang);




    }
}
