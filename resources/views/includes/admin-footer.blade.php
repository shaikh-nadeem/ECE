
      <div class="clear"></div>
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        Copyright © Website Developers India. All rights reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->



        <!-- jQuery  -->
        <script src="{{asset('assets/admin/js/jquery.dashboard.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/waves.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.knob.js')}}"></script>
        <script src="{{asset('assets/admin/js/morris.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/raphael-min.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/dataTables.bootstrap4.min.js')}}"></script>
       
       

        <!-- Plugins Js -->
        <script src="{{asset('assets/admin/css/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/bootstrap-colorpicker.min.js')}}"></script>

        <script src="{{asset('assets/admin/js/custombox.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/legacy.min.js')}}"></script>


         <!--<script type="text/javascript" src="{{asset('assets/admin/js/parsley.min.js')}}"></script>-->


        <script src="{{asset('assets/admin/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery.app.js')}}"></script>
        
        <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/custom.js')}}"></script>
       
       <script>
           $( document ).ready(function() {
                $(function() {
                    $(".subcon-icon").hide();
                    $(document).on("change",'.inputGender1',function(e){
                        e.preventDefault();
                        var thisid=$(this).attr("id");
                        var thisval=$("#"+thisid+" option:selected").html();
                        if(thisval=="Sub contract"){
                            $("."+thisid).show();
                        }else{
                            $("."+thisid).hide();
                        }
                    });
                    $(".subcon-icon-d").show();
                });
            });
            
//            $(document).ready(function() {
//                $('form').parsley();
//            });
            
            $(document).ready(function(){
//                $("[rel=tooltip]").tooltip({ placement: 'top', animation: true});
                $('[rel=tooltip]').tooltip({title: "", animation: true}); 
            });
            
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();
                $('#datatable1').DataTable();
                $('#datatable2').DataTable();
                $('#datatable3').DataTable();
                $('#datatable4').DataTable();
                $('#datatable5').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });

</script>
    </body>
</html>