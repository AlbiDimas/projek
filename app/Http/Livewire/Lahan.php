<?php

namespace App\Http\Livewire;
use App\Models\Lahan as ModelsLahan;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Lahan extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama_ikm, $penanggung_jawab, $alamat, $no_hp, $lokasi_lahan, $luas_lahan, $legalitas1, $ktp, $lahan_id;
    public $create, $edit, $show, $show_legalitas, $show_ktp, $search;

    protected $rules =
    [
        'nama_ikm' => 'required',
        'penanggung_jawab' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'lokasi_lahan' => 'required',
        'luas_lahan' => 'required',
        'legalitas1' => 'required',
        'ktp' => 'required',

    ];

    public function create()
    {
        $this->create = true;
    }

    public function store()
    {
        $this->validate();
        $filename = $this->legalitas1->store('legalitas1', 'public');
        $filenames = $this->ktp->store('ktp', 'public');

        ModelsLahan::create([
            'nama_ikm' =>$this->nama_ikm,
            'penanggung_jawab' =>$this->penanggung_jawab,
            'alamat' =>$this->alamat,
            'no_hp' =>$this->no_hp,
            'lokasi_lahan' =>$this->lokasi_lahan,
            'luas_lahan' => $this->luas_lahan,
            'legalitas1' =>$filename,
            'ktp' =>$filenames

        ]);
        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->format();
    }

    public function edit(ModelsLahan $lahan)
    {
        $this->edit = true;
        $this->nama_ikm = $lahan->nama_ikm;
        $this->penanggung_jawab = $lahan->penanggung_jawab;
        $this->alamat = $lahan->alamat;
        $this->no_hp = $lahan->no_hp;
        $this->lokasi_lahan = $lahan->lokasi_lahan;
        $this->luas_lahan = $lahan->luas_lahan;
        $this->legalitas1 = $lahan->legalitas1;
        $this->ktp = $lahan->ktp;
        $this->lahan_id = $lahan->id;

    }

    public function update(ModelsLahan $lahan)
    {
        $this->validate();

        $filename = $this->legalitas1->store('legalitas1', 'public');
        $filenames = $this->ktp->store('ktp', 'public');

        $lahan->update([
            'nama_ikm' =>$this->nama_ikm,
            'penanggung_jawab' =>$this->penanggung_jawab,
            'alamat' =>$this->alamat,
            'no_hp' =>$this->no_hp,
            'lokasi_lahan' =>$this->lokasi_lahan,
            'luas_lahan' => $this->luas_lahan,
            'legalitas1' =>$filename,
            'ktp' =>$filenames

        ]);
        session()->flash('sukses', 'Data Berhasil Ditambahkan');
        $this->format();
    }

    public function show(ModelsLahan $lahan)
    {
        // dd($lahan->id);
        $this->format();

        $this->show = true;
        $this->nama_ikm = $lahan->nama_ikm;
        $this->penanggung_jawab = $lahan->penanggung_jawab;
        $this->alamat = $lahan->alamat;
        $this->no_hp = $lahan->no_hp;
        $this->lokasi_lahan = $lahan->lokasi_lahan;
        $this->luas_lahan = $lahan->luas_lahan;
        $this->legalitas1 = $lahan->legalitas1;
        $this->ktp = $lahan->ktp;
        $this->lahan_id = $lahan->id;

    }

    public function show_legalitas(ModelsLahan $lahan)
    {
        $this->format();
        $this->show_legalitas = true;
        $this->legalitas1 = $lahan->legalitas1;

    }

    public function show_ktp(ModelsLahan $lahan)
    {
        $this->format();
        $this->show_ktp = true;
        $this->ktp = $lahan->ktp;
        // dd($lahan->id);

    }

    public function render()
    {
        if ($this->search) {
            $lahan = ModelsLahan::latest()
            ->where('nama_ikm', 'like', '%' .$this->search. '%')
            ->orWhere('alamat', 'like', '%' .$this->search. '%')
            ->orWhere('penanggung_jawab', 'like', '%' .$this->search. '%')
            ->orWhere('lokasi_lahan', 'like', '%' .$this->search. '%')
            ->paginate(10);
        } else {
            $lahan = ModelsLahan::latest()->paginate(10);
        }


        return view('livewire.lahan', [
            'lahan' => $lahan
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->nama_ikm);
        unset($this->penanggung_jawab);
        unset($this->alamat);
        unset($this->no_hp);
        unset($this->lokasi_lahan);
        unset($this->luas_lahan);
        unset($this->legalitas1);
        unset($this->ktp);
        unset($this->edit);
        unset($this->show);
        unset($this->show_legalitas);
        unset($this->show_ktp);

    }
}
