<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="csrf-token" content="{{ csrf_token() }}">
    	
        <!-- Bootstrap -->   
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
		<!-- <link rel="stylesheet" href="{{ URL::to('assets/plugins/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"> -->
		

		<link rel="stylesheet" href="{{ URL::to('assets/plugins/jqvmap/jqvmap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/dist/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/daterangepicker/daterangepicker.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/summernote/summernote-bs4.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/toastr/toastr.min.css') }}">

		<!--ajust elements datatable-->
		<link rel="stylesheet" href="{{ URL::to('assets/datatables/css/datatables.topbottom.css') }}">
		
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">



		<!-- Toastr -->
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/plugins/toastr/toastr.min.css') }}">

		<!--CSS select2-->
		<link href="{{ URL::to('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
		<link href="{{ URL::to('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}" rel="stylesheet">

	    <!--liveicons-->
	    <link href="{{ URL::to('assets/liveicons/css/styleliveicon.css') }}" rel="stylesheet">
	    <link href="{{ URL::to('assets/liveicons/css/customlivicons.css') }}" rel="stylesheet">
	    <link href="{{ URL::to('assets/liveicons/css/dialog.css') }}" rel="stylesheet">
	    <link href="{{ URL::to('assets/liveicons/css/jquery.minicolors.css') }}" rel="stylesheet">
	    <link href="{{ URL::to('assets/liveicons/css/livicons-help.css') }}" rel="stylesheet">
	    <link href="{{ URL::to('assets/liveicons/css/livicons-shortcodes.css') }}" rel="stylesheet">
	    <link href="{{ URL::to('assets/liveicons/css/prettify.css') }}" rel="stylesheet">

		<!--jAlert css-->
		<link rel="stylesheet" href="{{ URL::to('assets/jalert/css/jAlert.css') }}">



		<!--menuteam dashboard-->
		<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/dist/font-awesome-4.2.0/css/font-awesome.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::to('assets/dist/css/menu_bubble.css') }}">
		<link rel="stylesheet" href="{{ URL::to('assets/dist/css/normalize.css') }}">




		<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">-->



		<!--js-->
		<script src="{{ URL::to('assets/plugins/jquery/jquery.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/sparklines/sparkline.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
		<!--<script src="{{ URL::to('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>-->
		<script src="{{ URL::to('assets/plugins/jquery-knob/jquery.knob.min.js ') }}"></script>
		<script src="{{ URL::to('assets/plugins/moment/moment.min.js' )}}"></script>
		<script src="{{ URL::to('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

		<!-- SweetAlert2 -->
		<script src="{{ URL::to('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/toastr/toastr.min.js') }}"></script>
		
		<script src="{{ URL::to('assets/dist/js/adminlte.js') }}"></script>
		<script src="{{ URL::to('assets/dist/js/pages/dashboard.js') }}"></script>
		<script src="{{ URL::to('assets/dist/js/demo.js') }}"></script> 



		

		<!--DATATABLE Buttons-->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
	



	    <!--jAlert-->
	    <script type="text/javascript" src="{{ URL::to('assets/jalert/js/jAlert.js') }}"></script>
	    <script type="text/javascript" src="{{ URL::to('assets/jalert/js/jAlert-functions.js') }}"></script>

		<!--js liveicons-->
		<script src="{{ URL::to('assets/liveicons/js/indexliveicons.js') }}"  ></script>
		<script src="{{ URL::to('assets/liveicons/js/bootstrap-tooltip.js') }}"  ></script>
		<script src="{{ URL::to('assets/liveicons/js/customlivicons.js') }}"  ></script>
		{{-- <script src="{{ URL::to('/liveicons/js/insert_livicon.js') }}"  ></script> --}}
		<script src="{{ URL::to('assets/liveicons/js/jquery.inputCtl.min.js') }}"  ></script>
		<script src="{{ URL::to('assets/liveicons/js/jquery.minicolors.js') }}"  ></script>
		<script src="{{ URL::to('assets/liveicons/js/livicons-wp-1.4.src.js') }}"  ></script>
		<script src="{{ URL::to('assets/liveicons/js/raphael-min.js') }}"  ></script>

		<!--JS select2-->
		<script src="{{ URL::to('assets/plugins/select2/js/select2.full.min.js') }}"  ></script>

		<!--mask-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
		
		<!-- Called CSS-->
		<link href="{{ URL::to('css/called.css') }}" rel="stylesheet">
		<!-- Called JS-->
		<script src="{{ URL::to('js/called.js') }}"></script>

		<!-- GRAPH Dashboard--> 
		<script src="{{ URL::to('assets/plugins/chart.js/Chart.min.js') }}"  ></script>

	</head> 

	@include('templates.header')
	@include('templates.sidebar')
	@include('templates.footer')
		
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
</style>