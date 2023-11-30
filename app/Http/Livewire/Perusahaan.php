<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Perusahaan as ModelsPerusahaan;
use Livewire\WithFileUploads;


class Perusahaan extends Component
{
    use WithFileUploads;


    public $create, $edit, $show, $show_logo, $search, $delete, $pt_logo, $pt_nama, $pt_alamat, $pt_number, $pt_cp, $pt_bidang;
    public $perusahaan_id;

    protected $rules =
    [
        'pt_logo' => 'required',
        'pt_nama' => 'required',
        'pt_alamat' => 'required',
        'pt_number' => 'required',
        'pt_cp' => 'required',
        'pt_bidang' => 'required',
    ];

    public function create()
    {
        //dd('haii');
        $this->create = true;
    }

    public function store()
    {
        $this->validate();
        $filename = $this->pt_logo->store('pt_logo', 'public');
        ModelsPerusahaan::create([
            'pt_logo' => $filename,
            'pt_nama' => $this->pt_nama,
            'pt_alamat' => $this->pt_alamat,
            'pt_number' => $this->pt_number,
            'pt_cp' => $this->pt_cp,
            'pt_bidang' => $this->pt_bidang,


        ]);

        session()->flash('sukses', 'Barang Berhasil Ditambah');
        $this->format();

    }

    public function edit(ModelsPerusahaan $perusahaan)
    {
        //dd($perusahaan->id);
        $this->edit = true;
        $this->pt_logo = $perusahaan->pt_logo;
        $this->pt_nama = $perusahaan->pt_nama;
        $this->pt_alamat = $perusahaan->pt_alamat;
        $this->pt_number = $perusahaan->pt_number;
        $this->pt_cp = $perusahaan->pt_cp;
        $this->pt_bidang = $perusahaan->pt_bidang;
        $this->perusahaan_id = $perusahaan->id;
    }

    public function update(ModelsPerusahaan $perusahaan)
    {
        $this->validate();
        $filename = $this->pt_logo->store('pt_logo', 'public');

        $perusahaan->update([
            'pt_logo' => $filename,
            'pt_nama' => $this->pt_nama,
            'pt_alamat' => $this->pt_alamat,
            'pt_number' => $this->pt_number,
            'pt_cp' => $this->pt_cp,
            'pt_bidang' => $this->pt_bidang,
        ]);
        session()->flash('sukses', 'Barang Berhasil Ditambah');
        $this->format();
    }

    public function delete($id)
    {
        //dd('haii');
        $this->format();

        $this->delete = true;
        $this->perusahaan_id = $id;
    }

    public function destroy(ModelsPerusahaan $perusahaan)
    {
        $perusahaan->delete();

        session()->flash('sukses', 'Barang Berhasil Dihapus');
        $this->format();
    }

    public function show(ModelsPerusahaan $perusahaan)
    {
       //dd($perusahaan->id);

       $this->format();

       $this->show = true;
       $this->pt_logo = $perusahaan->pt_logo;
       $this->pt_nama = $perusahaan->pt_nama;
       $this->pt_alamat = $perusahaan->pt_alamat;
       $this->pt_number = $perusahaan->pt_number;
       $this->pt_cp = $perusahaan->pt_cp;
       $this->pt_bidang = $perusahaan->pt_bidang;
       $this->perusahaan_id = $perusahaan->id;


    }

    public function show_logo(ModelsPerusahaan $perusahaan)
    {
        $this->format();
        $this->show_logo = true;
        $this->pt_logo = $perusahaan->pt_logo;
    }

    public function render()
    {
        if ($this->search) {
            $perusahaan = ModelsPerusahaan::latest()->where('pt_nama', 'like', '%' . $this->search . '%')->paginate(10);

        } else {
            $perusahaan = ModelsPerusahaan::latest()->paginate(10);
        }

        return view('livewire.perusahaan', [
            'perusahaan' => $perusahaan
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->pt_logo);
        unset($this->pt_nama);
        unset($this->pt_number);
        unset($this->pt_cp);
        unset($this->pt_alamat);
        unset($this->pt_bidang);
        unset($this->edit);
        unset($this->delete);
        unset($this->show);
        unset($this->show_logo);



    }
}
