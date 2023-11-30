<?php

namespace App\Http\Livewire\Customer;

use App\Models\Kategori as ModelsKategori;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class Kategori extends Component
{
    protected $listeners = ['tambahKeranjang', 'kurangiKeranjang'];

    public $count;

    public function mount()
    {
        if (auth()->user())
        {
            $this->count = DB::table('peminjaman')
                ->join('detail_peminjaman', 'peminjaman.id', '=', 'detail_peminjaman.peminjaman_id')
                ->where('customer_id', auth()->user()->id)
                ->where('status', '=!', 3)
                ->count();
                //dd($this->count);
        }

    }

    public function pilihKategori($id)
    {
        $this->emit('pilihKategori', $id);
    }

    public function semuaKategori()
    {
        $this->emit('semuaKategori');
    }

    public function tambahKeranjang()
    {
        $this->count += 1;
    }

    public function kurangiKeranjang()
    {
        $this->count -= 1;
    }

    public function render()
    {

        return view('livewire.customer.kategori', [
            'kategori' => ModelsKategori::where('id', '!=', 1)->get(),
            'count' => $this->count
        ]);
    }
}
