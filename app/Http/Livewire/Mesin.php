<?php

namespace App\Http\Livewire;
use App\Models\Mesin as ModelsMesin;
use App\Models\Kategori;
use App\Models\Pemesan as ModelsPemesan;
use Livewire\Component;
use Livewire\WithFileUploads;


class Mesin extends Component
{
    use WithFileUploads;

    public $create, $edit, $delete, $showimg, $kategori, $mesin_nama, $pemesan, $mesin_spesifikasi, $mesin_jumlah, $tgl_selesai, $foto_mesin, $search;
    public $kategori_id, $mesin_id;

    protected $rules =
    [
        'mesin_nama' => 'required',
        'pemesan' => 'required',
        'mesin_spesifikasi' => 'required',
        'mesin_jumlah' => 'required',
        'kategori_id' => 'required',
        'tgl_selesai' => 'required',
        'foto_mesin' => 'required'
    ];

    protected $validationAttributes =
    [
        'kategori_id' => 'kategori',
    ];

    public function create()
    {
        //dd('haiii');
        $this->create = true;
        $this->kategori = Kategori::all();
    }

    public function store()
    {
        $this->validate();
        $filename = $this->foto_mesin->store('foto_mesin', 'public');

        ModelsMesin::create([
            'mesin_nama' =>$this->mesin_nama,
            'pemesan' =>$this->pemesan,
            'mesin_spesifikasi' =>$this->mesin_spesifikasi,
            'mesin_jumlah' =>$this->mesin_jumlah,
            'kategori_id' =>$this->kategori_id,
            'foto_mesin' => $filename,
            'tgl_selesai' =>$this->tgl_selesai,

        ]);
        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->format();
    }

    public function edit(ModelsMesin $mesin)
    {
        //dd($mesin->id);
        $this->edit = true;
        $this->kategori = Kategori::all();
        $this->mesin_nama = $mesin->mesin_nama;
        $this->pemesan = $mesin->pemesan;
        $this->mesin_spesifikasi = $mesin->mesin_spesifikasi;
        $this->mesin_jumlah = $mesin->mesin_jumlah;
        $this->kategori_id = $mesin->kategori_id;
        $this->foto_mesin = $mesin->foto_mesin;
        $this->tgl_selesai = $mesin->tgl_selesai;
        $this->mesin_id = $mesin->id;

    }

    public function update(ModelsMesin $mesin)
    {
        $this->validate();
        $filename = $this->foto_mesin->store('foto_mesin', 'public');

        $mesin->update([
            'mesin_nama' =>$this->mesin_nama,
            'pemesan' =>$this->pemesan,
            'mesin_spesifikasi' =>$this->mesin_spesifikasi,
            'mesin_jumlah' =>$this->mesin_jumlah,
            'kategori_id' =>$this->kategori_id,
            'foto_mesin' => $filename,
            'tgl_selesai' =>$this->tgl_selesai,

        ]);
        session()->flash('sukses', 'Data Berhasil Diubah');
        $this->format();
    }

    public function delete($id)
    {
        //dd($id);
        $this->format();

        $this->delete = true;
        $this->kategori = Kategori::all();
        $this->mesin_id = $id;

    }

    public function destroy(ModelsMesin $mesin)
    {
        $mesin->delete();

        session()->flash('sukses', 'Data Berhasil Dihapus');
        $this->format();
    }

    public function showimg(ModelsMesin $mesin)
    {
        $this->format();

        $this->showimg = true;
        $this->kategori = Kategori::all();
        $this->mesin_nama = $mesin->mesin_nama;
        $this->pemesan = $mesin->pemesan;
        $this->mesin_spesifikasi = $mesin->mesin_spesifikasi;
        $this->mesin_jumlah = $mesin->mesin_jumlah;
        $this->kategori_id = $mesin->kategori_id;
        $this->foto_mesin = $mesin->foto_mesin;
        $this->tgl_selesai = $mesin->tgl_selesai;
        $this->mesin_id = $mesin->id;
    }





    public function render()
    {
        if ($this->search) {
            $mesin = ModelsMesin::latest()->where('mesin_nama', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $mesin = ModelsMesin::latest()->paginate(10);
        }


        return view('livewire.mesin', [
            'mesin' => $mesin
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->mesin_nama);
        unset($this->mesin_spesifikasi);
        unset($this->mesin_jumlah);
        unset($this->kategori_id);
        unset($this->tgl_selesai);
        unset($this->pemesan);
        unset($this->edit);
        unset($this->delete);
        unset($this->showimg);

    }
}
