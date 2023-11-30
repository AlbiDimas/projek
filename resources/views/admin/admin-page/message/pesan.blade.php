@if ($pesan)
    <div class="modal modal-blur fade show" id="modal-large" tabindex="-1" role="dialog" aria-modal="true" style="display: block;">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Pesan Customer</h5>
            <button wire:click="format" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$customer_message}}
            </div>
            <div class="modal-footer">
            <button wire:click="format" type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
@endif
