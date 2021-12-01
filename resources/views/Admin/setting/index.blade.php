@extends('Admin.layouts.master')
@section('css')
@section('content')
@include('partial.error')


{{-- @toastr_css
@section('title')
    الاعدادات
@stop
@endsection
@section('page-header')

@section('PageTitle')
    الاعدادات
@stop

@endsection --}}


    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">

        <div class="card card-statistics h-100">

            <div class="card-body">
                <h4 class="mt-0 header-title">Update Settings</h4>
                <form enctype="multipart/form-data" method="post" action="{{route('settings.update','test')}}">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-6 border-right-2 border-right-blue-400">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">اسم الشركة<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="comp_name" value="{{ $setting['comp_name'] }}" required type="text" class="form-control" placeholder="Name of Company">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">حول الشركة<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="about" rows="5" value="{{ $setting['about'] }}" required type="text" class="form-control" placeholder="About the Company">

                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">الدولة</label>
                                <div class="col-lg-9">
                                    <input name="address1" value="{{ $setting['address1'] }}" type="text" class="form-control" placeholder="address 1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">المحافظة</label>
                                <div class="col-lg-9">
                                    <input name="address2" value="{{ $setting['address2'] }}" type="text" class="form-control" placeholder="address 2">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">1 الهاتف</label>
                                <div class="col-lg-9">
                                    <input name="phone1" value="{{ $setting['phone1'] }}" type="text" class="form-control" placeholder="phone 1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> 2 الهاتف</label>
                                <div class="col-lg-9">
                                    <input name="phone2" value="{{ $setting['phone2'] }}" type="text" class="form-control" placeholder="phone 2">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">البريد الالكتروني</label>
                                <div class="col-lg-9">
                                    <input name="email" value="{{ $setting['email'] }}" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> website</label>
                                <div class="col-lg-9">
                                    <input name="websiteLink" value="{{ $setting['websiteLink'] }}" type="text" class="form-control" placeholder="website Link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> FB Link</label>
                                <div class="col-lg-9">
                                    <input name="FBLink" value="{{ $setting['FBLink'] }}" type="text" class="form-control" placeholder="FB Link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> Lin Link </label>
                                <div class="col-lg-9">
                                    <input name="LinLink" value="{{ $setting['LinLink'] }}" type="text" class="form-control" placeholder="Lin Link">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> Youtube Link  </label>
                                <div class="col-lg-9">
                                    <input name="YoutubeLink" value="{{ $setting['YoutubeLink'] }}" type="text" class="form-control" placeholder="Youtube Link ">
                                </div>
                            </div>



                            {{-- <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">شعار المدرسة</label>
                                <div class="col-lg-9">
                                    <div class="mb-3">
                                        <img style="width: 100px" height="100px" src="{{ URL::asset('attachments/logo/'.$setting['logo']) }}" alt="">
                                    </div>
                                    <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('submit')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
{{-- @endsection
@section('js')
    @toastr_js
    @toastr_render --}}
@endsection
