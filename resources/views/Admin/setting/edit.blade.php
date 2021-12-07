@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.Update_Settings') }}</h4>
                {{-- <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('settings.update') }}">{{ __('site.back') }}</a> --}}
                <form action="{{route('settings.update',$settings->id)}}" method="post" enctype="multipart/form-data">


                    {{csrf_field()}}
                    @method('PUT')




                        <div class="col-md-6 border-right-2 border-right-blue-400">


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.comp_name') }}<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="comp_name"
                                    value="{{ $settings->comp_name }}" required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.about') }}<span class="text-danger">*</span></label>
                                <div class="col-lg-9">

                                    <textarea required class="form-control" rows="5" name="desc">{{ $settings->about }}</textarea>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.country') }}</label>
                                <div class="col-lg-9">
                                    <input name="address1" value="{{ $settings->country }}" type="text" class="form-control" placeholder="address 1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.city') }}</label>
                                <div class="col-lg-9">
                                    <input name="address2" value="{{ $settings->city }}" type="text" class="form-control" placeholder="address 2">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.phone1') }}</label>
                                <div class="col-lg-9">
                                    <input name="phone1" value="{{ $settings->phone1 }}" type="text" class="form-control" placeholder="phone 1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> {{ __('site.phone2') }}</label>
                                <div class="col-lg-9">
                                    <input name="phone2" value="{{ $settings->phone2 }}" type="text" class="form-control" placeholder="phone 2">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> {{ __('site.email') }}</label>
                                <div class="col-lg-9">
                                    <input name="email" value="{{ $settings->email }}" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> {{ __('site.websiteLink') }}</label>
                                <div class="col-lg-9">
                                    <input name="websiteLink" value="{{ $settings->websiteLink }}" type="text" class="form-control" placeholder="website Link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.FBLink') }}</label>
                                <div class="col-lg-9">
                                    <input name="FBLink" value="{{ $settings->FBLink }}" type="text" class="form-control" placeholder="FB Link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> {{ __('site.LinLink') }} </label>
                                <div class="col-lg-9">
                                    <input name="LinLink" value="{{ $settings->LinLink }}" type="text" class="form-control" placeholder="Lin Link">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold"> {{ __('site.YoutubeLink') }}  </label>
                                <div class="col-lg-9">
                                    <input name="YoutubeLink" value="{{ $settings->YoutubeLink }}" type="text" class="form-control" placeholder="Youtube Link ">
                                </div>
                            </div>



                            {{-- <div class="form-group">
                                <label>{{ __('site.image') }} :</label>
                                <div>
                                    <input class="form-control img" name="image"  type="file">
                                    <img src="{{ asset('uploads/settings/'. $settings->image) }}" class="img-thumbnail img-preview" width="100" alt="no photo">
                                </div>
                            </div> --}}



                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">{{ __('site.image') }}</label>
                                <div class="col-lg-9">

                                    <div class="form-group">
                                        <label>{{ __('site.add-image') }} :</label>
                                        <div>
                                            <input class="form-control img" name="image"  type="file" accept="image/*">
                                            <img src="{{ asset('uploads/settings/'. $settings->image) }}" class="img-thumbnail img-preview" width="100" alt="no photo">
                                        </div>
                                    </div>


                                   {{-- <div class="mb-3">
                                        <img style="width: 100px" height="100px" src="{{ URL::asset('attachments/logo/'.$settings->logo) }}" alt="">
                                    </div>
                                     <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>--}}
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    {{ __('site.Save') }}
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    {{ __('site.Close') }}
                                </button>
                            </div>
                        </div>


                        {{-- <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{__('site.Save')}}</button> --}}

                </form>
            </div>

        </div>

    </div>
</div>

 <!-- end col -->
@endsection

