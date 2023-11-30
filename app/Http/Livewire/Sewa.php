<?php

namespace App\Http\Livewire;
use App\Models\Sewa as ModelsSewa;
use App\Models\Barang as ModelsBarang;
use App\Models\Barang;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use Livewire\Component;

class Sewa extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete, $search, $show, $tgl_sewa, $penyewa, $alamat, $kontak, $nilai_sewa, $legalitas, $tgl_kembali, $qty, $barang_id;
    public $barang, $sewa_id;

    protected $rules =
    [
        'tgl_sewa' => 'required | after_or_equal: today',
        'barang_id' => 'required',
        'penyewa' => 'required',
        'alamat' => 'required',
        'kontak' => 'required',
        'nilai_sewa'=> 'required',
        'legalitas' => 'required',
        'tgl_kembali' => 'required',
        'qty' => 'required'


    ];

    protected $validationAttributes =
    [
        'barang_id' => 'barang'
    ];

    public function create()
    {
        $this->create = true;
        $this->barang = Barang::all();
    }



    public function store()
    {
        $this->validate();
        $this->barang = Barang::all();
        $filename = $this->legalitas->store('legalitas', 'public');
        //dd($this->nama);
        ModelsSewa::create([
            'tgl_sewa' => $this->tgl_sewa,
            'barang_id' => $this->barang_id,
            'penyewa' => $this->penyewa,
            'alamat' => $this->alamat,
            'kontak' => $this->kontak,
            'nilai_sewa' => $this->nilai_sewa,
            'tgl_kembali' => $this->tgl_kembali,
            'legalitas' => $filename,
            'qty' => $this->qty
        ]);

        // ModelsBarang::update([

        // ]);

        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->format();
    }

    public function edit(ModelsSewa $sewa)
    {
        $this->format();
        //dd($sewa->id);
        $this->edit = true;
        $this->barang = Barang::all();
        $this->tgl_sewa = $sewa->tgl_sewa;
        $this->barang_id = $sewa->barang_id;
        $this->penyewa = $sewa->penyewa;
        $this->alamat = $sewa->alamat;
        $this->kontak = $sewa->kontak;
        $this->nilai_sewa = $sewa->nilai_sewa;
        $this->legalitas = $sewa->legalitas;
        $this->tgl_kembali = $sewa->tgl_kembali;
        $this->sewa_id = $sewa->id;
    }

    public function update(ModelsSewa $sewa)
    {
        $this->validate();
        $filename = $this->legalitas->store('legalitas', 'public');

        $sewa->update([

            'tgl_sewa' => $this->tgl_sewa,
            'barang_id' => $this->barang_id,
            'penyewa' => $this->penyewa,
            'alamat' => $this->alamat,
            'kontak' => $this->kontak,
            'nilai_sewa' => $this->nilai_sewa,
            'tgl_kembali' => $this->tgl_kembali,
            'legalitas' => $filename,
            'qty' => $this->qty

        ]);

        session()->flash('sukses', 'Data Berhasil Diupdate');
        $this->format();


    }

    public function delete($id)
    {
        //dd($id);
        $this->format();

        $this->delete = true;
        $this->sewa_id = $id;

    }

    public function destroy(ModelsSewa $sewa)
    {
        $sewa->delete();

        session()->flash('sukses', 'Data Berhasil Dihapus');
        $this->format();
    }

    public function show(ModelsSewa $sewa)
    {
        //dd($sewa->id);

        $this->format();

        $this->show = true;
        $this->tgl_sewa = $sewa->tgl_sewa;
        $this->barang = $sewa->barang->barang_nama;
        $this->penyewa = $sewa->penyewa;
        $this->alamat = $sewa->alamat;
        $this->kontak = $sewa->kontak;
        $this->nilai_sewa = $sewa->nilai_sewa;
        $this->legalitas = $sewa->legalitas;
        $this->tgl_kembali = $sewa->tgl_kembali;
        $this->qty = $sewa->qty;
        $this->id = $sewa->id;

    }

    public function render()
    {
        if ($this->search) {
            $sewa = ModelsSewa::latest()->where('penyewa', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $sewa = ModelsSewa::latest()->paginate(10);
        }


        return view('livewire.sewa', [
            'sewa' => $sewa
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->tgl_nama);
        unset($this->barang_id);
        unset($this->penyewa);
        unset($this->alamat);
        unset($this->kontak);
        unset($this->nilai_sewa);
        unset($this->legalitas);
        unset($this->tgl_kembali);
        unset($this->qty);
        unset($this->edit);
        unset($this->delete);
        unset($this->show);
    }
}
