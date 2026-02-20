 <script src="{{ asset('admin/assets/vendors/js/vendors.min.js') }}"></script>
 <!-- vendors.min.js {always must need to be top} -->
 <script src="{{ asset('admin/assets/vendors/js/daterangepicker.min.js') }}"></script>
 <script src="{{ asset('admin/assets/vendors/js/apexcharts.min.js') }}"></script>
 <script src="{{ asset('admin/assets/vendors/js/circle-progress.min.js') }}"></script>

 <script src="{{ asset('admin/assets/vendors/js/select2.min.js') }}"></script>
 <script src="{{ asset('admin/assets/vendors/js/select2-active.min.js') }}"></script>
 <!--! END: Vendors JS !-->
 <!--! BEGIN: Apps Init  !-->
 <script src="{{ asset('admin/assets/js/common-init.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/dashboard-init.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/leads-view-init.min.js') }}"></script>

 <!--! END: Apps Init !-->
 <!--! BEGIN: Theme Customizer  !-->
 <script src="{{ asset('admin/assets/js/theme-customizer-init.min.js') }}"></script>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Bootstrap 5 Toasts
         var toastElList = [].slice.call(document.querySelectorAll('.toast'))
         var toastList = toastElList.map(function(toastEl) {
             var toast = new bootstrap.Toast(toastEl, {
                 delay: 3000
             }); // auto hide after 5s
             toast.show();
             return toast;
         });
     });
 </script>