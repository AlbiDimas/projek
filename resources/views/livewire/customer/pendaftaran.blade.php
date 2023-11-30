<div class="container">
    @include('component/flash')
    @include('customer/pendaftaran/create')
    <div class="row">
        <div class="col-md-11">
            <h1>Daftar Pelatihan</h1>
        </div>
        <div class="col-md-1">
            <a wire:click="create" href="#" class="btn btn-primary btn-icon-split">

                Daftar
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group flex-nowrap">
                <input wire:model="search" type="text" class="form-control" placeholder="Cari pendaftar..." aria-label="Username" aria-describedby="addon-wrapping">
                <button class="input-group-text" id="addon-wrapping">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </div>
        </div>
    </div>
    <br>
    <div class="row row-card">
        @foreach ($pendaftaran as $item)
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body p-4 text-center">
                    <span class="avatar avatar-xl mb-3 rounded"></span>
                    <h3 class="m-0 mb-1"><a href="#">{{ $item->nama }}</a></h3>
                    <div class="text-muted">{{ $item->asal_sekolah }}</div>
                    <div class="mt-3">
                        @if ($item->status->status == 'Confirm')
                            <span class="badge bg-green-lt">Confirm</span>
                        @elseif ($item->status->status == 'Unconfirm')
                            <span class="badge bg-red-lt">Unconfirm</span>
                        @else
                            <span class="badge bg-yellow-lt">Wait For response</span>
                        @endif
                    </div>
                    </div>
                    <div class="d-flex">
                    <a href="#" class="card-btn"><!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                        Email</a>
                    <a href="#" class="card-btn"><!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
                        Call</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



</div>
