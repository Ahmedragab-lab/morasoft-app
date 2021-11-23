@extends('site.layouts.master')
@section('title') checkout @endsection
@section('css')

@endsection
@section('content')
<br><br><br>
<div id="content-main-wrap" class="is-clearfix">
    <div id="content-area" class="site-content-area">
      <div id="content-area-inner" class="site-content-area-inner">
        <section class="section  is-clearfix hero has-background-primary-light">
            <div class="container">
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
                                <form accept-charset="UTF-8" class="ajax-contact-form" action="" method="POST" autocomplete="off">
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="text" name="fname" placeholder="First Name" required> </div>
                                        </div>
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="text" name="lname" placeholder="Last Name" required> </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="tel" name="phone" placeholder="Your Phone" required> </div>
                                        </div>
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="email" name="email" placeholder="Your Email" required> </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="text" name="address1" placeholder="Address" required> </div>
                                        </div>
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="text" name="address2" placeholder="Address2" required> </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="text" name="city" placeholder="City" required> </div>
                                        </div>
                                        <div class="field">
                                            <div class="control is-expanded">
                                            <input class="input" type="text" name="country" placeholder="Country" required> </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
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
                                <table class="table is-fullwidth is-hoverable">
                                    <thead>
                                      <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartitems as $item)
                                        <tr>
                                            <td><img src="{{ asset('uploads/product/'.$item->product->image) }}" alt="" width="50px"></td>
                                            <td>{{ $item->product->product_name }}</td>
                                            <td>{{ $item->product_qty }}</td>
                                            <td>{{ $item->product->selling_price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                                  <button class="btn btn-primary float-end">Order Now</button>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
      </div>
    </div>
</div>
  <!-- #content-main-wrap -->

@endsection
@section('js')

@endsection
