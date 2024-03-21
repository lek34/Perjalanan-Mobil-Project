<div id="delete{{ $id }}" class="modal fade">
    <div class="modal-dialog modal-confirm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-13">
                    <div class="icon-box">
                        <i class="fa fa-exclamation"></i>
                    </div>
                </div>

                <p>
                    Do you really want to delete this
                    @if ($model)
                        <b>{{ $model->$modelAttribute }}</b>?
                    @else
                        record?
                    @endif
                    This process cannot be undone.
                </p>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <form method="post" action="{{ $route }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
