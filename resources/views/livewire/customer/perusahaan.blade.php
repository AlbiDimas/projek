<div class="container">
    @include('customer/perusahaan/show')
    <div class="row">
        @foreach ($perusahaan as $item)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->pt_nama}}</h5>
                        <p class="card-text">{{$item->pt_alamat}}</p>
                    </div>
                    <div class="card-footer">
                        <a wire:click="show({{$item->id}})" class="btn  btn-outline-primary">
                            <span class="text">Lihat Barang</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
