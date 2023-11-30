<?php

namespace App\Http\Livewire;
use App\Models\Pendaftaran as ModelsPendaftaran;
use App\Models\Perusahaan;
use App\Models\Status;
use Livewire\Component;
use Livewire\WithFileUploads;


class Pendaftaran extends Component
{
    use WithFileUploads;


    public $create, $edit, $show, $show_identitas, $delete, $search, $perusahaan, $nama, $asal_sekolah, $kontak, $alamat, $tempat_lahir, $tgl_lahir, $identitas, $status ;
    public $perusahaan_id, $pendaftaran_id, $status_id;

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
        'status_id' => 'required'


    ];

    protected $validationAttributes =
    [
        'perusahaan_id' => 'perusahaan',
        'status_id' => 'status'
    ];


    public function edit(ModelsPendaftaran $pendaftaran)
    {
        //dd($pendaftaran->id);
        $this->edit = true;
        $this->perusahaan = Perusahaan::all();
        $this->status = Status::all();
        $this->nama = $pendaftaran->nama;
        $this->asal_sekolah = $pendaftaran->asal_sekolah;
        $this->kontak = $pendaftaran->kontak;
        $this->alamat = $pendaftaran->alamat;
        $this->tempat_lahir = $pendaftaran->tempat_lahir;
        $this->tgl_lahir = $pendaftaran->tgl_lahir;
        $this->perusahaan_id = $pendaftaran->perusahaan_id;
        $this->identitas = $pendaftaran->identitas;
        $this->status_id = $pendaftaran->status_id;
        $this->pendaftaran_id = $pendaftaran->id;

    }

    public function update(ModelsPendaftaran $pendaftaran)
    {
        $this->validate();

        $pendaftaran->update([

            'status_id' =>$this->status_id



        ]);
        session()->flash('sukses', 'Data Berhasil Diubah');
        $this->format();

    }

    public function delete($id)
    {
        $this->format();

        $this->delete = true;
        $this->pendaftaran_id = $id;

    }

    public function destroy(ModelsPendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        session()->flash('sukses', 'Data Berhasil Diubah');
        $this->format();

    }

    public function show(ModelsPendaftaran $pendaftaran)
    {
        $this->format();
        $this->show = true;
        $this->nama = $pendaftaran->nama;
        $this->asal_sekolah = $pendaftaran->asal_sekolah;
        $this->kontak = $pendaftaran->kontak;
        $this->alamat = $pendaftaran->alamat;
        $this->tempat_lahir = $pendaftaran->tempat_lahir;
        $this->tgl_lahir = $pendaftaran->tgl_lahir;
        $this->perusahaan = $pendaftaran->perusahaan->pt_nama;
        $this->identitas = $pendaftaran->identitas;
        $this->status = $pendaftaran->status->status;
        $this->pendaftaran_id = $pendaftaran->id;

    }

    public function show_identitas(ModelsPendaftaran $pendaftaran)
    {
        $this->format();
        $this->show_identitas = true;
        $this->identitas = $pendaftaran->identitas;
    }

    public function render()
    {
        if ($this->search) {
            $pendaftaran = ModelsPendaftaran::latest()
            ->where('nama', 'like', '%' . $this->search . '%')
            ->orWhere('asal_sekolah', 'like', '%' . $this->search . '%')
            ->orWhere('alamat', 'like', '%' . $this->search . '%')
            ->orWhere('tempat_lahir', 'like', '%' . $this->search . '%')
            ->paginate(10);


        } else {
            $pendaftaran = ModelsPendaftaran::latest()->paginate(10);
        }

        return view('livewire.pendaftaran', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->nama);
        unset($this->asal_sekolah);
        unset($this->kontak);
        unset($this->alamat);
        unset($this->tempat_lahir);
        unset($this->tgl_lahir);
        unset($this->perusahaan_id);
        unset($this->identitas);
        unset($this->edit);
        unset($this->status_id);
        unset($this->delete);
        unset($this->show);
        unset($this->show_identitas);



    }
}
