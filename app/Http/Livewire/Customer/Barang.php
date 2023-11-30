<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Barang as ModelsBarang;
use App\Models\DetailPeminjaman;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;



class Barang extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['pilihKategori', 'semuaKategori'];

    public $kategori_id, $pilih_kategori, $detail_barang, $barang_id, $search;


    public function pilihKategori($id)
    {
        $this->format();
        $this->kategori_id = $id;
        $this->pilih_kategori = true;

    }

    public function semuaKategori()
    {
        $this->format();
        $this->pilih_kategori = false;

    }

    public function detailBarang($id)
    {
       //dd($id);
       $this->format();
       $this->detail_barang = true;
       $this->barang_id = $id;
    }

    public function keranjang(ModelsBarang $barang)
    {
        if (auth()->user())
        {
            if (auth()->user()->hasRole('customer'))
            {
                $peminjaman_lama = DB::table('peminjaman')
                    ->join('detail_peminjaman', 'peminjaman.id', '=', 'detail_peminjaman.peminjaman_id')
                    ->where('customer_id', auth()->user()->id)
                    ->where('status', '=!', 3)
                    ->get();

                if ($peminjaman_lama->count() == 5)
                {
                    session()->flash('failed', 'Barang tidak boleh sama');
                }
                else
                {
                    if ($peminjaman_lama->count() == 0)
                    {
                        $peminjaman_baru = Peminjaman::create([
                            'kode_pinjam' => random_int(100000000, 999999999),
                            'customer_id' =>auth()->user()->id,
                            'status' => 0
                        ]);

                        DetailPeminjaman::create([
                            'peminjaman_id' => $peminjaman_baru->id,
                            'barang_id' => $barang->id
                        ]);

                        $this->emit('tambahKeranjang');
                        session()->flash('sukses', 'Barang berhasil dimasukan ke dalam keranjang');
                    }
                    else
                    {
                        //dd($peminjaman_lama[0]);
                        if ($peminjaman_lama[0]->barang_id == $barang->id) {
                            session()->flash('failed', 'Barang tidak boleh sama');
                        } else {
                            DetailPeminjaman::create([
                                'peminjaman_id' => $peminjaman_lama[0]->peminjaman_id,
                                'barang_id' => $barang->id
                            ]);
                            $this->emit('tambahKeranjang');
                            session()->flash('sukses', 'Barang berhasil dimasukan ke dalam keranjang');

                        }

                    }
                }

            }
            else
            {
                session()->flash('failed', 'Role anda bukan peminjam');
            }

        }
        else
        {
            session()->flash('failed', 'Anda harus login!!!');
            redirect('/login');
        }

    }





    public function render()
    {
        if ($this->pilih_kategori) {
            $barang = ModelsBarang::latest()->where('kategori_id', $this->kategori_id)->paginate(10);
            $title = Kategori::find($this->kategori_id)->nama;
        }
        elseif ($this->detail_barang) {
            $barang = ModelsBarang::find($this->barang_id);
            $title = 'Detail Barang';
        }
        else {
            if ($this->search) {
                $barang = ModelsBarang::latest()->where('barang_nama', 'like', '%' .$this->search. '%')->paginate();
            } else {
                $barang = ModelsBarang::latest()->paginate(10);
            }
            $title = 'Semua Barang';
        }


        return view('livewire.customer.barang', compact('barang', 'title'));
    }

    public function format()
    {
        $this->detail_barang = false;
        $this->pilih_kategori = false;
        unset($kategori_id);
        unset($this->barang_id);
    }



}
