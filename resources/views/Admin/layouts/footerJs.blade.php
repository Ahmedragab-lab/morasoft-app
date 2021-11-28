<!-- jQuery  -->

<script src="{{ URL::asset('admin/en/assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script src="{{ URL::asset('admin/en/assets/js/detect.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/fastclick.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/waves.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.scrollTo.min.js')}}"></script>

@yield('js')

<!--Morris Chart-->
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>

<!-- dashboard js -->
{{-- <script src="admin/en/assets/pages/dashboard.int.js"></script> --}}
<script src="{{ URL::asset('admin/en/assets/pages/dashboard.int.js')}}"></script>


<!-- App js -->
<script src="{{ URL::asset('admin/en/assets/js/app.js')}}"></script>
@toastr_js
@toastr_render

{{-- image preview --}}
<script>
    $(".img").change(function(){
        if(this.files && this.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".img-preview").attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
{{-- end image preview --}}
{{-- <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script> --}}
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Datatable init js -->
<script src="{{ URL::asset('admin/en/assets/pages/datatables.init.js')}}"></script>
<!-- App js -->
<script src="{{ URL::asset('admin/en/assets/js/app.js')}}"></script>
