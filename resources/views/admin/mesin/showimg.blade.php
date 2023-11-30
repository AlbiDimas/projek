@if ($showimg)
    <div class="modal modal-blur fade show" id="modal-simple" tabindex="-1" role="dialog" aria-modal="true" style="display: block; padding-left: 15px">
        <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Gambar Mesin</h5>
            <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <img src="/storage/{{$foto_mesin}}" width="400px">
            </div>
            <div class="modal-footer">
            <button wire:click="format" type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
@endif
