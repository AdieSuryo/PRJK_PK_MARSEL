@foreach ($categories as $item)
    <div class="modal fade" id="modalDelete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger  text-white">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Categories</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('categories/' . $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="mb-3">
                            <p>Are you sure want delete category, name {{ $item->name }}?</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endforeach
