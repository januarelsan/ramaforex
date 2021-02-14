<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('material/images/favicon.png')}}">
    <title>CMS Compro Forex</title>
    <link href="{{asset('material/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('material/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('material/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('material/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        
        <!-- header disini -->
        @include('cms.layout.header')

        
        <!-- sidebar disini -->
        @include('cms.layout.sidebar')
       
        <div class="page-wrapper">
            
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Forms</h3>
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol> -->
                    </div>
                    
                </div>
                
                <!-- konten disini -->
                @yield('content')
               
            </div>
           
            <!-- footer disini -->
            @include('cms.layout.footer')
            
        </div>
       
    </div>
    <script src="{{asset('material/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('material/plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('material/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('material/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('material/js/waves.js')}}"></script>
    <script src="{{asset('material/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('material/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('material/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('material/js/custom.min.js')}}"></script>
    <script src="{{asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('material/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('material/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('material/plugins/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
    <script src="{{asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    </script>
    
</body>

</html>