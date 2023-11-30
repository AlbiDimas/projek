<?php

namespace App\Http\Livewire;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class ChartScript extends Component
{
    public $bulan_tahun;

    public function mount()
    {
        $this->bulan_tahun = date('Y-m');
    }

    public function render()
    {

        $bulan = substr($this->bulan_tahun, -2);
        $tahun = substr($this->bulan_tahun, 0, 4);
        $selesai_dpinjam = Peminjaman::select(DB::raw('count(*) as count, tgl_kembali'))
        ->groupBy('tgl_kembali')
        ->whereMonth('tgl_kembali', $bulan)
        ->whereYear('tgl_kembali', $tahun)
        ->where('status', 3)
        ->get();


        $count = [];
        foreach ($selesai_dpinjam as $item)
        {
            $count [] = $item->count;
        }

        $tgl_kembali = [];
        foreach ($selesai_dpinjam as $item)
        {
            $tgl_kembali [] = substr($item->tgl_kembali, -2);
        }

        return view('livewire.chart-script', compact('count', 'tgl_kembali'));
    }
}
