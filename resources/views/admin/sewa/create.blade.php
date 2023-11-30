@if ($create)

    <div class="modal modal-blur fade show" id="modal-report" tabindex="-1" style="display: block;" role="dialog" aria-modal="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Tanggal Sewa</label>
                <input wire:model="tgl_sewa" type="date" class="form-control" name="example-text-input" placeholder="">
            </div>
            <div class="row">
                <div class="mb-2">
                    <div class="col">
                        <label class="form-label">Barang Yang Disewa</label>
                        <select wire:model="barang_id" name="idbarang"  id="barang" class="form-control">
                            <option selected value="">Pilih Barang</option>
                            @foreach ($barang as $item)
                                <option value="{{$item->id}}">{{$item->barang_nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Penyewa</label>
                    <input wire:model="penyewa" type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input wire:model="alamat" type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Kontak</label>
                        <input type="text" class="form-control" wire:model="kontak">
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Nilai Sewa</label>
                        <input type="text" class="form-control" wire:model="nilai_sewa">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Bukti Legalitas</label>
                        <input type="file" class="form-control" wire:model="legalitas">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" wire:model="qty">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Tanggal Kembali</label>
                        <input type="date" class="form-control" wire:model="tgl_kembali">
                    </div>
                </div>
            </div>


            <div class="modal-footer">
            <a wire:click="format" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
            </a>
            <a wire:click="store" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                Tambah Data
            </a>
            </div>
        </div>
        </div>
    </div>


@endif
