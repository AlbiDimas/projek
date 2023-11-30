@if ($delete)
    <div class="modal modal-blur fade show" id="modal-default" style="display: block; padding-right: 17px;">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Hapus Barang</h4>
        <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Anda yakin?&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
        <button wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button wire:click="destroy({{$mesin_id}})" type="button" class="btn btn-danger">Hapus</button>
        </div>
        </div>

        </div>

        </div>
@endif
