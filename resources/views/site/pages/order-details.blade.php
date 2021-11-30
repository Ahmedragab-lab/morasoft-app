@extends('site.layouts.master')
@section('title') order details @endsection
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<br><br><br>
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section  is-clearfix hero has-background-primary-light">
            <div class="container">
                <form accept-charset="UTF-8" class="ajax-contact-form" action="#"
                      method="POST" autocomplete="off">
                    @csrf
                    <div class="row">
                        <dive class="col-md">
                            <div class="columns is-variable is-multiline is-centered">
                                <div class="column is-10">
                                    {{-- <h1 class="heading-title style-1">Basic Details</h1> --}}
                                    <br>
                                    <!-- successful form message -->
                                    <div class="overhang-message-content is-hidden success">
                                    <span class="icon">
                                        <i class="ion-md-notifications"></i>
                                    </span> Thank You! Your message was sent successfully. </div>
                                    <div class="overhang-message-content is-hidden error" >
                                    <span class="icon">
                                        <i class="ion-md-notifications"></i>
                                    </span> OOPS! there is somethig wrong.
                                    </div>
                                    <!-- ajax contact form -->
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    {{-- <input type="text" value="{{ Auth::user()->id }}" name="user_id"> --}}
                                                {{-- <input class="input" type="text" name="fname" placeholder="First Name" value="{{ Auth::user()->fname }}" readonly> </div> --}}
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="text" name="lname" placeholder="Last Name" value="{{ Auth::user()->lname }}" readonly> </div> --}}
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="email" name="email" placeholder="Your Email" value="{{ Auth::user()->email }}" readonly> </div> --}}
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="tel" name="phone" placeholder="Your Phone" value="{{ Auth::user()->phone }}" required> </div> --}}
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="text" name="address1" placeholder="Address" value="{{ Auth::user()->address1 }}" required> </div> --}}
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="text" name="address2" placeholder="Address2" value="{{ Auth::user()->address2 }}" required> </div> --}}
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field is-horizontal">
                                            <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="text" name="city" placeholder="City" value="{{ Auth::user()->city }}" required> </div> --}}
                                            </div>
                                            <div class="field">
                                                <div class="control is-expanded">
                                                {{-- <input class="input" type="text" name="country" placeholder="Country" value="{{ Auth::user()->country }}" required> </div> --}}
                                            </div>
                                            </div>
                                        </div>

                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </dive>
                        <div class="col-md-12">
                            <div class="columns is-variable is-multiline is-centered">
                                <div class="column is-10">
                                    <h1 class="heading-title style-1">Service Order Details</h1>
                                    <br>
                                    @php
                                      $total_price = 0;
                                      $total = 0;
                                    @endphp
                                    <table class="table is-fullwidth is-hoverable">
                                        <thead>
                                        <tr>
                                            <th>order_no</th>
                                            <th>Name</th>
                                            <th>service name</th>
                                            <th>from</th>
                                            <th>to</th>
                                            <th>price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($order_details as $item) --}}
                                            <tr>
                                                <td >{{ $order_details->order_no }}</td>
                                                <td>{{ $order_details->name }}</td>
                                                <td>{{ $order_details->service->serve_name }}</td>
                                                <td>{{ $order_details->from->Name}}</td>
                                                <td>{{ $order_details->to->Name}}</td>
                                                <td>{{ number_format($order_details->price) }} LE</td>
                                            </tr>
                                            @php
                                                // $total_price += $item->price;
                                            @endphp
                                            {{-- @endforeach --}}
                                        </tbody>
                                    </table>
                                    <table class="table is-fullwidth is-hoverable">
                                        <thead>
                                        <tr>
                                            <th>total price</th>
                                            <th>total tax 14%</th>
                                            <th>total </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total_tax= $order_details->price * 14/100;
                                            @endphp
                                            <tr>
                                               <td>{{ number_format($order_details->price) }} LE</td>
                                               <td>{{ $total_tax }} LE</td>
                                               <td>{{ number_format($order_details->price+$total_tax) }} LE</td>
                                            </tr>
                                            <input type="hidden" value="{{ $order_details->id }} " name="orderid">
                                            <input type="hidden" value="{{ $total_tax }} " name="tax">
                                            <input type="hidden" value="{{ $order_details->price+$total_tax }}" name="total">
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-warning float-end save-data">Order Now</button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
          swal("{{ session('status') }}");
    </script>
@endif
{{-- <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script> --}}


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $(".save-data").click(function(e){
            e.preventDefault();
            let orderid = $("input[name=orderid]").val();
            let tax = $("input[name=tax]").val();
            let total = $("input[name=total]").val();
            console.log(orderid);
            console.log(tax);
            console.log(total);
            $.ajax({
                method:"POST",
                url: "/order_details",
                data:{
                    orderid:orderid,
                    tax:tax,
                    total:total,
                },
                success: function(response)
                {
                    if(response) {
                        swal(response.status);
                    }
                    $('.save-data').removeClass('btn-warning ').addClass('btn-success disabled').html('done thank you for your choice');
                    // $('.save-data').hide();
                }
            });
        });
    });
</script>

@endsection
