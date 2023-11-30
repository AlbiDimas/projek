@if ($show)
    <div class="modal fade show" id="modal-xl" style="display: block; padding-right: 15px;">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Detail Barang</h4>
        <button type="button" wire:click="format" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    <img src="/storage/{{$foto}}" width="500px">
                </div>
                <div class="col-md-7">
                    <table class="table">
                        <tr>
                            <th>Nama Mesin</th>
                            <td>:</td>
                            <td>{{$nama}}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>:</td>
                            <td>{{$jumlah}}</td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td>:</td>
                            <td>{{$stock}}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi Barang</th>
                            <td>:</td>
                            <td>{{$deskripsi}}</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>:</td>
                            <td>{{$kategori}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <a href="mailto:dimase.albi23@gmail.com"  class="btn btn-sm btn-secondary btn-icon-split">
                <span  class="icon text-white-50">
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="text">Sewa Barang</span>
            </a>
            <a class="btn btn-sm btn-primary btn-icon-split">
                <span  class="icon text-white-50">
                    <i class="fas fa-shopping-bag"></i>
                </span>
                <span class="text">Buat Pesanan</span>
            </a>
        </div>
        </div>

        </div>

        </div>
@endif
