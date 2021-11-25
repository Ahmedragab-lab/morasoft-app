{{-- modal add price --}}
<div class="modal fade" id="addprice{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    {{-- <input type="text"  name="id" value="{{ $order->id }}"> --}}
                    <input type="text" class="form-control"  name="price">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">{{ __('site.close') }}</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light">{{ __('site.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End modal add price --}}
{{-- <div id="addprice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">اضافة صفحة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('navbar_data.store') }}" method="post">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <label for="">الاسم عربي</label>
                        <input type="text" class="form-control" name="Name" id="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="">English Name</label>
                        <input type="text" class="form-control" name="Name_en" id="Name_en">
                    </div>
                </div>

                <label for="">لينك الصفحة</label>
                <input type="text" class="form-control" name="route_name" id="route_name">
                <label for="">رقم الترتيب</label>
                <input type="text" class="form-control" name="number_nav" id="number_nav">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-success waves-effect waves-light">حفظ</button>
            </div>
        </form>
        </div>
    </div>
</div> --}}
