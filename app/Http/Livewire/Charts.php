<?php

namespace App\Http\Livewire;

use App\Models\Barang as ModelsBarang;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\WithPagination;

use Livewire\Component;

class Charts extends Component
{
    use WithPagination;

    public $barangId = [];

    public $firstRun = true;




    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
        'onBlockClick' => 'handleOnBlockClick',
    ];



    public function handleOnPointClick($point)
    {
        dd($point);
    }

    public function handleOnSliceClick($slice)
    {
        dd($slice);
    }

    public function handleOnColumnClick($column)
    {
        dd($column);
    }

    public function handleOnBlockClick($block)
    {
        dd($block);
    }



    public function render()
    {
        $barang = ModelsBarang::orderBy('barang_nama', 'asc')->get();
        foreach ($barang as $key => $value) {
            $id [] = $value->id;
            if ($this->barangId) {
                $barang = ModelsBarang::whereIn('id', $this->barangId)->get();
            } else {
                $barang = ModelsBarang::whereIn('id', $id)->get();
            }


            // dd($barang);
            // var_dump($id);

        }


        // dd($barang);

        $columnChartModel = $barang->groupBy('id')
            ->reduce(function ($columnChartModel, $data) {
                $barang_nama = $data->first()->barang_nama;
                $value = $data->sum('barang_stock');
                $warna[$data->first()->barang_nama] = '#' .dechex(rand(0x000000, 0xFFFFFF));

                return $columnChartModel->addcolumn($barang_nama, $value, $warna[$barang_nama]);
            }, (new columnChartModel())
                ->setTitle('Stock Barang')
                ->setAnimated($this->firstRun)
                ->withOnColumnClickEventName('onColumnClick')
                ->setLegendVisibility(false)
                // ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
                ->setColumnWidth(90)
                ->withGrid()
            );

            $pieChartModel = $barang->groupBy('id')
            ->reduce(function ($pieChartModel, $data) {
                $barang_nama = $data->first()->barang_nama;
                $value = $data->sum('jumlah');
                $warna[$data->first()->barang_nama] = '#' .dechex(rand(0x000000, 0xFFFFFF));

                return $pieChartModel->addslice($barang_nama, $value, $warna[$barang_nama]);
            }, (new pieChartModel())
                ->setTitle('Jumlah Barang')
                ->setAnimated($this->firstRun)
                ->setType('pie')
                ->withOnSliceClickEvent('onSliceClick')
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                // ->setDataLabelsEnabled($this->showDataLabels)
                // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
            );


        return view('livewire.charts')
        ->with([
            'columnChartModel' => $columnChartModel,
            'pieChartModel' => $pieChartModel,
            'barang' => $barang,
            // 'lineChartModel' => $lineChartModel,
            // 'areaChartModel' => $areaChartModel,
            // 'multiLineChartModel' => $multiLineChartModel,
            // 'multiColumnChartModel' => $multiColumnChartModel,
            // 'radarChartModel' => $radarChartModel,
            // 'treeChartModel' => $treeChartModel,
        ]);
    }
}
