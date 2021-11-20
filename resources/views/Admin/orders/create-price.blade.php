{{-- modal add price --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Services Price</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <form action="{{ route('orders.update',$order->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Add Price</label>
                    <input type="text"  name="id" value="{{ $order->name }}">
                    <input type="text" class="form-control"  name="price">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End modal add price --}}
