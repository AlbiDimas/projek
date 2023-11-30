<?php

namespace App\Http\Livewire;
use App\Models\Pemesan as ModelsPemesan;
use App\Models\Mesin;
use Livewire\Component;
use Livewire\WithFileUploads;


class Pemesan extends Component
{
    use WithFileUploads;


    public $create, $edit, $delete, $search, $mesin, $nama, $alamat, $no_kontrak, $tgl_kontrak, $nilai_kontrak, $foto_kontrak, $filename;
    public $mesin_id, $pemesan_id;

    protected $rules =
    [
        'nama' => 'required',
        'alamat' => 'required',
        'mesin_id' => 'required',
        'no_kontrak' => 'required',
        'tgl_kontrak' =>'required',
        'nilai_kontrak' => 'required',
        'foto_kontrak' => 'required',

    ];

    protected $validationAttributes =
    [
        'mesin_id' => 'mesin'
    ];



    public function create()
    {
        //dd('haii');
        $this->create = true;
        $this->mesin = Mesin::all();
    }

    public function store()
    {
        $this->validate();
        $filename = $this->foto_kontrak->store('foto_kontrak', 'public');

        ModelsPemesan::create([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'mesin_id' => $this->mesin_id,
            'no_kontrak' => $this->no_kontrak,
            'tgl_kontrak' => $this->tgl_kontrak,
            'nilai_kontrak' => $this->nilai_kontrak,
            'foto_kontrak' => $filename
        ]);
        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->format();
    }

    public function edit(ModelsPemesan $pemesan)
    {
        $this->edit = true;
        $this->mesin = Mesin::all();
        $this->nama = $pemesan->nama;
        $this->alamat = $pemesan->alamat;
        $this->mesin_id = $pemesan->mesin_id;
        $this->no_kontrak = $pemesan->no_kontrak;
        $this->tgl_kontrak = $pemesan->tgl_kontrak;
        $this->nilai_kontrak = $pemesan->nilai_kontrak;
        $this->foto_kontrak = $pemesan->foto_kontrak;
        $this->pemesan_id = $pemesan->id;


    }

    public function update(ModelsPemesan $pemesan)
    {
        $this->validate();
        $filename = $this->foto_kontrak->store('foto_kontrak', 'public');

        $pemesan->update([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'mesin_id' => $this->mesin_id,
            'no_kontrak' => $this->no_kontrak,
            'tgl_kontrak' => $this->tgl_kontrak,
            'nilai_kontrak' => $this->nilai_kontrak,
            'foto_kontrak' => $filename
        ]);
        session()->flash('sukses', 'Data Berhasil Diubah');
        $this->format();
    }

    public function delete($id)
    {
       $this->format();

       $this->delete = true;
       $this->pemesan_id = $id;
    }

    public function destroy(ModelsPemesan $pemesan)
    {
        $pemesan->delete();

        session()->flash('sukses', 'Data Berhasil Dihapus');
        $this->format();
    }

    public function render()
    {
        if ($this->search) {
            $pemesan = ModelsPemesan::latest()->where('nama', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $pemesan = ModelsPemesan::latest()->paginate(10);
        }


        return view('livewire.pemesan', [
            'pemesan' => $pemesan
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->nama);
        unset($this->alamat);
        unset($this->mesin_id);
        unset($this->no_kontrak);
        unset($this->tgl_kontrak);
        unset($this->nilai_kontrak);
        unset($this->foto_kontrak);
        unset($this->edit);
        unset($this->delete);
    }
}
