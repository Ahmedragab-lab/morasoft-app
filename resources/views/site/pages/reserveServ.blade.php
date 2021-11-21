@extends('site.layouts.master')

@section('content')
    <img src={{ asset('assets/images/default_1.jpg') }} class="img-fluid" alt="...">

    <form>
        <div class="   flex d-flex  justify-content-evenly reserve-Serv mt-4" dir="rtl">
            <div class="personal-form">

                <h2 class="m-4"> البيانات الشخصية</h2>
                <div class="mb-3">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="الاسم الكامل">
                </div>
                <div class="mb-3">

                    <input type="email" class="form-control" id="email" name="email" placeholder="البريد الالكتروني">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="company_name" placeholder="اسم الشركة">
                </div>
                <div class="mb-3">

                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="رقم الموبايل">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="address" name="address" placeholder="العنوان">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="city" name="city" placeholder="المدينة">
                </div>
                <div class="mb-3">

                    <input type="text" class="form-control" id="country" placeholder="country">
                </div>
            </div>
            <div class="service-form">
                <h2 class="m-4"> تفاصيل الشحنة<h2>

                        <div class="mb-3">

                            <input type="email" class="form-control" id="to" name="to" placeholder="من">
                        </div>
                        <div class="mb-3">

                            <input type="email" class="form-control" id="from" name="from" placeholder="الي">
                        </div>
                        <div class="mb-3">

                            <input type="email" class="form-control" id="client_address" name="client_address"
                                placeholder="عنوان االمستلم">
                        </div>
                        <div class="mb-3">

                            <input type="email" class="form-control" id="service_city" name="service_city"
                                placeholder="المدينة">
                        </div>
                        <div class="mb-3">

                            <input type="email" class="form-control" id="service_city" name="service_city"
                                placeholder="الدولة">
                        </div>
                        <div class="mb-3">

                            <input type="email" class="form-control" id="tans_way" name="tans_way"
                                placeholder="طريقة الشحن">
                        </div>
                        <div class="mb-3">

                            <input type="email" class="form-control" id="service_type" name="service_type"
                                placeholder="نوع الشحنة">
                        </div>

            </div>
        </div>
        <div class="field my-4 mx-5 text-center ">
            <div class="control">
                <button class="button save-data" type="submit">Order Now </button>
            </div>
        </div>
    </form>

    

    

@endsection
