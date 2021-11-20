@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.order') }}</h4>
                <div class="col-md-6 mb-3">
                    {{-- <a href="{{ route('users.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.add-user') }}</a> --}}
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.name') }}</th>
                                <th>{{ __('site.email') }}</th>
                                <th>{{ __('site.phone') }}</th>
                                <th>{{ __('site.address') }}</th>
                                <th>{{ __('site.image') }}</th>
                                <th>{{ __('site.service') }}</th>
                                <th>{{ __('site.sms') }}</th>
                                <th>{{ __('site.price') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $orders as $index=>$order )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->user->phone }}</td>
                                <td>{{ $order->address }}</td>
                                <td>
                                    <img src="{{ asset('uploads/user-img/'.$order->user->image) }}" class="img-thumbnail" width="70" alt="">
                                </td>
                                <td>{{ $order->service->serve_name }}</td>
                                <td>{{ Str::limit($order->sms,20)}}</td>
                                <td>{{ $order->price}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                        {{ __('site.add_price') }}
                                    </button>
                                </td>

                                {{-- <td>
                                    <form action="{{ route('users.destroy', $order->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('users.edit', $order->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
                                        <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
                                            {{ __('site.delete') }}
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
                            {{-- modal add price --}}
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Services Price</h5>
                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('orders.store') }}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Add Price</label>
                                                <input type="hidden"  name="order_id" value="{{ $order->id }}">
                                                <input type="text" class="form-control"  name="price">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            {{-- End modal add price --}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div> <!-- end col -->

@endsection
@section('js')

@endsection



