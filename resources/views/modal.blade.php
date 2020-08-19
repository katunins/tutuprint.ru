@if (Session::has('modal-info'))
    <div class="modal">
        {{ Session::get('modal-info') }}
    </div>
@endif