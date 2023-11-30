<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                   <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                        @foreach ($barang as $barangs)
                            <input type="checkbox" class="form-check-input m-0 align-middle mr-3" value="{{$barangs->id}}" wire:model="barangId"/>
                            <span>{{$barangs->barang_nama}}</span>
                        @endforeach
                        <livewire:livewire-column-chart
                            key="{{ $columnChartModel->reactiveKey() }}"
                            :column-chart-model="$columnChartModel"
                        />
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                    <livewire:livewire-pie-chart
                        key="{{ $pieChartModel->reactiveKey() }}"
                        :pie-chart-model="$pieChartModel"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
