<!-- jQuery  -->
<script src="{{ URL::asset('admin/en/assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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

