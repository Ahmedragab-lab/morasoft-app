@extends('site.layouts.master')
@section('title') checkout @endsection
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
@endsection
@section('content')
<br><br><br>
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section  is-clearfix hero has-background-primary-light">
            <div class="container">
                {{-- <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div> --}}
                <form accept-charset="UTF-8" class="ajax-contact-form" action="{{ route('checkout.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row">
                        <dive class="col-md-7">
                            <div class="columns is-variable is-multiline is-centered">
                                <div class="column is-10">
                                    <h1 class="heading-title style-1">Basic Details</h1>
                                    <br>
                                    <!-- successful form message -->
                                    <div class="overhang-message-content is-hidden success">
                                    <span class="icon">
                                        <i class="ion-md-notifications"></i>
                                    </span> Thank You! Your message was sent successfully. </div>
                                    <!-- error form message -->
                                    <div class="overhang-message-content is-hidden error">
                                    <span class="icon">
                                        <i class="ion-md-notifications"></i>
                                    </span> Oops! Something went wrong, we couldn't send your message. </div>
                                    <!-- ajax contact form -->

                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    {{-- <input type="text" value="{{ Auth::user()->id }}" name="user_id"> --}}
                                                <input class="input" type="text" name="fname" placeholder="First Name" value="{{ Auth::user()->fname }}" required> </div>
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="text" name="lname" placeholder="Last Name" value="{{ Auth::user()->lname }}" required> </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="tel" name="phone" placeholder="Your Phone" value="{{ Auth::user()->phone }}" required> </div>
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="email" name="email" placeholder="Your Email" value="{{ Auth::user()->email }}" required> </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="text" name="address1" placeholder="Address" value="{{ Auth::user()->address1 }}" required> </div>
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="text" name="address2" placeholder="Address2" value="{{ Auth::user()->address2 }}" required> </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="text" name="city" placeholder="City" value="{{ Auth::user()->city }}" required> </div>
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                <input class="input" type="text" name="country" placeholder="Country" value="{{ Auth::user()->country }}" required> </div>
                                            </div>
                                            </div>
                                        </div>

                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </dive>
                        <div class="col-md-5">
                            <div class="columns is-variable is-multiline is-centered">
                                <div class="column is-10">
                                    <h1 class="heading-title style-1">Order Details</h1>
                                    <br>
                                    @php
                                      $total_price = 0;
                                      $total_tax = 0;
                                      $total = 0;
                                    @endphp
                                    <table class="table is-fullwidth is-hoverable">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Tax (14%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartitems as $item)
                                            <tr>
                                                <td><img src="{{ asset('uploads/product/'.$item->product->image) }}" alt="" width="50px"></td>
                                                <td>{{ $item->product->product_name }}</td>
                                                <td>{{ $item->product_qty }}</td>
                                                <td>{{ number_format($item->product->selling_price)}}</td>
                                                <td>{{ number_format($item->sum)}}</td>
                                                <td>{{ number_format($item->tax) }}</td>
                                            </tr>
                                            @php
                                                $total_price += $item->sum;
                                                $total_tax += $item->tax;
                                                $total += $item->product->selling_price;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <table class="table is-fullwidth is-hoverable">
                                        <thead>
                                        <tr>
                                            <th>total price</th>
                                            <th>total tax</th>
                                            <th>total </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>{{ number_format($total_price) }} LE</td>
                                               <td>{{ number_format($total_tax) }} LE</td>
                                               <td>{{ number_format($total_price+$total_tax) }} LE</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-warning float-end">Order Now</button>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
               </form>
            </div>
        </section>
      </div>
    </div>
</div>
  <!-- #content-main-wrap -->

@endsection
@section('js')
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif --}}
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
@endsection