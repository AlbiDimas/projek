<?php

namespace App\Http\Livewire;
use App\Models\Message as ModelsMessage;
use App\Models\Barang as ModelsBarang;
use App\Models\Sewa as ModelsSewa;
use App\Models\Pengembalian as ModelsPengembalian;
use App\Models\Mesin as ModelsMesin;
use App\Models\Perusahaan as ModelsPerusahaan;
use App\Models\Pendaftaran as ModelsPendaftaran;
use App\Models\Status as ModelsStatus;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pesan, $customer_message;
    public $detail_barang, $nama, $jumlah, $stock, $deskripsi, $kategori, $foto;
    public $pesanan, $mesin_nama, $pemesan, $mesin_spesifikasi, $mesin_jumlah, $tgl_selesai, $foto_mesin;
    public $detail_perusahaan, $pt_logo, $pt_nama, $pt_alamat, $pt_number, $pt_cp, $pt_bidang;
    public $detail_siswa, $nama_siswa, $asal_sekolah, $kontak, $alamat, $tempat_lahir, $tgl_lahir, $perusahaan_id, $identitas, $status_id, $perusahaan_tujuan, $status_update;

    protected $validationAttributes =
    [
        'perusahaan_id' => 'perusahaan_tujuan',
        'status_id' => 'status_update'
    ];


    public function pesan(ModelsMessage $message)
    {
        // dd($message->id);
        $this->format();
        $this->pesan = true;
        $this->customer_message = $message->message;

    }

    public function detail_barang(ModelsBarang $barang)
    {
        // dd($barang->id);
        $this->format();
        $this->detail_barang = true;
        $this->nama = $barang->barang_nama;
        $this->jumlah = $barang->jumlah;
        $this->stock = $barang->barang_stock;
        $this->deskripsi = $barang->barang_deskripsi;
        $this->foto = $barang->foto;



    }

    public function pesanan(ModelsMesin $mesin)
    {
        // dd($mesin->id);

        $this->format();
        $this->pesanan = true;
        $this->mesin_nama = $mesin->mesin_nama;
        $this->mesin_spesifikasi = $mesin->mesin_spesifikasi;
        $this->mesin_jumlah = $mesin->mesin_jumlah;
        $this->foto_mesin = $mesin->foto_mesin;
        $this->tgl_selesai = $mesin->tgl_selesai;
        $this->pemesan = $mesin->pemesan;



    }

    public function detail_perusahaan(ModelsPerusahaan $perusahaan)
    {
        $this->format();
        $this->detail_perusahaan = true;
        $this->pt_logo = $perusahaan->pt_logo;
        $this->pt_nama = $perusahaan->pt_nama;
        $this->pt_alamat = $perusahaan->pt_alamat;
        $this->pt_number = $perusahaan->pt_number;
        $this->pt_cp = $perusahaan->pt_cp;
        $this->pt_bidang = $perusahaan->pt_bidang;

    }

    public function detail_siswa(ModelsPendaftaran $pendaftaran)
    {
        $this->format();
        $this->perusahaan_tujuan = ModelsPerusahaan::all();
        $this->status_update = ModelsStatus::all();
        $this->detail_siswa = true;
        $this->nama = $pendaftaran->nama;
        $this->asal_sekolah = $pendaftaran->asal_sekolah;
        $this->kontak = $pendaftaran->kontak;
        $this->alamat = $pendaftaran->alamat;
        $this->tempat_lahir = $pendaftaran->tempat_lahir;
        $this->tgl_lahir = $pendaftaran->tgl_lahir;
        $this->perusahaan_tujuan = $pendaftaran->perusahaan->pt_nama;
        $this->identitas = $pendaftaran->identitas;
        $this->status_update = $pendaftaran->status->status;
    }

    public function render()
    {
        return view('livewire.admin-page', [
            'message' =>ModelsMessage::latest()->paginate(3),
            'barang' => ModelsBarang::latest()->paginate(3),
            'sewa' => ModelsSewa::latest()->paginate(3),
            'pengembalian' => ModelsPengembalian::latest()->paginate(3),
            'mesin' => ModelsMesin::latest()->paginate(3),
            'perusahaan' => ModelsPerusahaan::latest()->paginate(3),
            'pendaftaran' => ModelsPendaftaran::latest()->paginate(3),
        ]);
    }

    public function format()
    {
        unset($this->pesan);
        unset($this->customer_message);
        unset($this->detail_barang);
        unset($this->pesanan);
        unset($this->detail_perusahaan);
        unset($this->detail_siswa);
    }
}
