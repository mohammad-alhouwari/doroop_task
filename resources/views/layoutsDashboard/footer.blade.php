   
   <footer class="footer">
       <div class="container-fluid">
           <nav class="pull-left">
              
           </nav>
           <div class="copyright ml-auto">
            2023
            <i class="la la-heart heart text-danger"></i>
               <a href="https://github.com/mohammad-alhouwari">Mohammad-Alhouwari</a>
               <i class="la la-heart heart text-danger"></i> 
                من انتاج 
           </div>
       </div>
   </footer>
   </div>
   </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
       aria-hidden="true">
      
   </div>
   </body>
   <script src="{{ asset('dashboard/js/core/jquery.3.2.1.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/core/popper.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/core/bootstrap.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/chartist/chartist.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
   {{-- <script src="{{asset('dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script> --}}
   <script src="{{ asset('dashboard/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/chart-circle/circles.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/ready.min.js') }}"></script>
   <script src="{{ asset('dashboard/js/demo.js') }}"></script>
   <script src="{{ asset('dashboard/js/imageCropper.js') }}"></script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@12"></script>

  {{-- @if (session('success'))
       <script>
           Swal.fire({
               icon: 'success',
               title: 'تمت العملية بنجاح',
               text: `{{ session('success') }}`,
               confirmButtonColor: '#3085d6',
               confirmButtonText: 'حسناً'
           });
       </script>
   @endif
   @if (session('error'))
       <script>
           Swal.fire({
               icon: 'error',
               title: 'حدث خطأ',
               text: `{{ session('error') }}`,
               confirmButtonColor: '#3085d6',
               confirmButtonText: 'حسناً'
           });
       </script>
   @endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  --}}

   <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
   {{-- <script src="{{ asset('dashboard/js/cropper.js') }}"></script> --}}
   <script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js'></script>
   <script>
       var table = new DataTable('#myTable', {
           language: {
               url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/ar.json',
           },
       });
   </script>
   

   </html>
