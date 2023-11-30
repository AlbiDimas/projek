<?php

namespace App\Http\Livewire;

use App\Models\Peminjaman;
use Livewire\Component;
use Livewire\WithPagination;


class Transaksi extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $belum_dipinjam, $sedang_dipinjam, $selesai_dipinjam, $search;
    public $jumlah;

    public function belumDipinjam()
    {
        $this->format();
        $this->belum_dipinjam = true;
    }

    public function sedangDipinjam()
    {
        $this->format();
        $this->sedang_dipinjam = true;
    }

    public function selesaiDipinjam()
    {
        $this->format();
        $this->selesai_dipinjam = true;
    }

    public function pinjam(Peminjaman $peminjaman)
    {
        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->barang->update([
                'barang_stock' => $detail_peminjaman->barang->barang_stock -$detail_peminjaman->peminjaman->jumlah
            ]);
        }

        $peminjaman->update([
            'admin_pinjam' => auth()->user()->id,
            'status' => 2,
            // 'jumlah' => -$detail_peminjaman->jumlah
        ]);

        session()->flash('sukses', 'Barang Berhasil Dipinjam');
    }

    public function kembali(Peminjaman $peminjaman)
    {
        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->barang->update([
                'barang_stock' => $detail_peminjaman->barang->barang_stock +$detail_peminjaman->peminjaman->jumlah
            ]);
        }

        $peminjaman->update([
            'admin_kembali' => auth()->user()->id,
            'tgl_kembali' => today(),
            'status' => 3,
            // 'jumlah' =>+$detail_peminjaman->jumlah
        ]);
    }


    public function render()
    {
        if ($this->search)
        {
            if ($this->belum_dipinjam)
            {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' .$this->search. '%')->where('status', '=', 1)->paginate(5);
            }
            elseif($this->sedang_dipinjam)
            {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' .$this->search. '%')->where('status', '=', 2)->paginate(5);
            }
            elseif($this->selesai_dipinjam)
            {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' .$this->search. '%')->where('status', '=', 3)->paginate(5);
            }
            else
            {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' .$this->search. '%')->where('status', '!=', 0)->paginate(5);
            }

        }
        else
        {
            if ($this->belum_dipinjam)
            {
                $transaksi = Peminjaman::latest()->where('status', '=', 1)->paginate(5);
            }
            elseif($this->sedang_dipinjam)
            {
                $transaksi = Peminjaman::latest()->where('status', '=', 2)->paginate(5);
            }
            elseif($this->selesai_dipinjam)
            {
                $transaksi = Peminjaman::latest()->where('status', '=', 3)->paginate(5);
            }
            else
            {
                $transaksi = Peminjaman::latest()->where('status', '!=', 0)->paginate(5);
            }

        }



        return view('livewire.transaksi', [
            'transaksi' => $transaksi
        ]);


    }

    public function format()
    {
        $this->belum_dipinjam = false;
        $this->sedang_dipinjam = false;
        $this->selesai_dipinjam = false;
    }
}
