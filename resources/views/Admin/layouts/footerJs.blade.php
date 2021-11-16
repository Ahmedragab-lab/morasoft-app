<!-- jQuery  -->
<script src="{{ URL::asset('admin/en/assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/detect.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/fastclick.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/waves.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.scrollTo.min.js')}}"></script>


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
@yield('js')
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
