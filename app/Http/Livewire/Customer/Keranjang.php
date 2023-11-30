<?php

namespace App\Http\Livewire\Customer;

use App\Models\Peminjaman;
use App\Models\DetailPeminjaman;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class Keranjang extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $tgl_pinjam, $jumlah;

    protected $rules =
    [
        'tgl_pinjam' => 'required|date|after_or_equal:today',
        'jumlah' => 'required|numeric'
    ];

    public function delete(Peminjaman $peminjaman, DetailPeminjaman $detail_peminjaman)
    {
        if ($peminjaman->detail_peminjaman->count() == $peminjaman->jumlah)
        {
            $detail_peminjaman->delete();
            $peminjaman->delete();
            session()->flash('sukses', 'Barang berhasil dihapus');
            redirect('/');
            $this->emit('kurangiKeranjang');
        }
        else
        {
            $detail_peminjaman->delete();
            session()->flash('sukses', 'Barang berhasil dihapus');
        }

    }

    public function hapusMasal()
    {
        $keranjang = Peminjaman::latest()->where('customer_id', auth()->user()->id)->where('status', '!=', 3)->first();
        foreach ($keranjang->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->delete();
        }
        $keranjang->delete();
        session()->flash('sukses', 'Barang berhasil dihapus');
        redirect('/store');

    }

    public function pinjam(Peminjaman $keranjang)
    {
        //dd($keranjang);
        $this->validate();
        $keranjang->update
        ([
            'status' => 1,
            'tgl_pinjam' => $this->tgl_pinjam,
            'jumlah' => $this->jumlah,
            'tgl_kembali' => Carbon::create($this->tgl_pinjam)->addDays(10)
        ]);

        session()->flash('sukses', 'Barang berhasil dipinjam');

    }

    public function render()
    {
        return view('livewire.customer.keranjang', [
            'keranjang' => Peminjaman::latest()->where('customer_id', auth()->user()->id)->where('status', '!=', 3)->first()
        ]);
    }
}
