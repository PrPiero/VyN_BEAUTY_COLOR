<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- BOOSTRAP / AJAX -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- DATEPICKER / JQUERY UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery.ui.datepicker.min.css">
    <!-- TOASTR -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <!-- DATEPICKER -->
    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav flex-row w-100">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block px-2 mr-auto">
                    <a href="{{ route('admin') }}" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">Cerrar Sesión</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <!--<form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            </form>-->
        </nav>
        <!-- /.navbar -->

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin') }}" class="brand-link">
                <img src="/adminlte/img/VyN.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/adminlte/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                @include('admin.partials.nav')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="#"><b>V&N BEAUTY COLOR</b></a>.</strong> Todos los derechos reservados.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <!-- DatePicker / jQuery UI -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery.ui.datepicker.min.js"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- DatePicker -->
    <script src="/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/adminlte/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/js/adminlte.min.js"></script>

    <!-- MOSTRAR MODAL DE AUTENTICACIÓN -->
    <script>
        $('#exampleModal').modal('show');
    </script>

    <!-- LISTAR DATATABLE CON DATEPICKER -->
    <script>
        $(document).ready(function() {
            $('.input-daterange').datepicker({
                todayBtn: 'linked',
                format: 'yyyy/mm/dd',
                autoclose: true,
                language: 'es'
            });

            load_data();

            function load_data (from_date = '', to_date = '')
            {
                $('#quotes_table').DataTable({
                    processing: false,
                    serverSide: true,
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                    },
                    ajax: {
                        url: "{{ route('admin.quotes.index') }}",
                        data: {from_date: from_date, to_date: to_date}
                    },
                    rowReorder: {
                        dataSrc: "id"
                    },
                    columns:[
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        //{data: 'id', name: 'id'},
                        {data: 'client', name: 'client'},
                        {data: 'phone', name: 'phone'},
                        //{data: 'email', name: 'email'},
                        //{data: 'date', name: 'date'},
                        //{data: 'time', name: 'time'},
                        //{data: 'service.service', name: 'service.service'},
                        {data: 'state', name: 'state'},
                        {data: 'action', name: 'action', orderable: false}
                    ]
                });
            }

            $('#filter').click(function(){
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();

                if (from_date != '' && to_date != '')
                {
                    $('#quotes_table').DataTable().destroy();
                    load_data(from_date, to_date);
                }

                else
                {
                    $('#DateModal').modal('show');
                }
            });

            $('#refresh').click(function(){
                $('#from_date').val('');
                $('#to_date').val('');
                $('#quotes_table').DataTable().destroy();
                load_data();
            });
        });
    </script>

    <!-- OBTENER DATOS DE LA CITA DEL DATATABLE -->
    <script>
        function editarCita(id){
            $.get('citas/editar/'+id, function(cita){
                //Asignar los datos recuperados a la ventana modal
                $('#Quote_id').val(cita[0].id);
                $('#txtClient').val(cita[0].client);
                $('#txtPhone').val(cita[0].phone);
                $('#txtEmail').val(cita[0].email);
                $('#txtDate').val(cita[0].date);
                $('#txtDescription').val(cita[0].description);
                //$('#txtService').val(cita[0].service.service);
                $('#txtState').val(cita[0].state);
                $("input[name=_token]").val();
                $('#QuoteModal').modal('toggle');
            });
        }
    </script>

    <!-- ACTUALIZAR ESTADO DE LA CITA / ENVIAR CORREO ELECTRÓNICO -->
    <script>
        $(function(){
            $('#quote-form').submit(function(e){
                e.preventDefault();
            });
        });

        function CambiarEstado()
        {
            if ($('#quote-form').valid())
            {
                var id2 = $('#Quote_id').val();
                var client2 = $('#txtClient').val();
                var phone2 = $('#txtPhone').val();
                var email2 = $('#txtEmail').val();
                var date2 = $('#txtDate').val();
                var description2 = $('#txtDescription').val();
                //var service_id2 = $('#txtService').val();
                var state2 = $('#txtState').val();
                var _token2 = $("input[name=_token]").val();
                var validation;

                if (state2 == "Atendida")
                {
                    validation = "Pendiente";
                }

                else if (state2 == "Pendiente")
                {
                    validation = "Atendida";
                }

                $.ajax({
                    url: "{{ route('admin.quotes.update') }}",
                    method: "POST",
                    data:{
                        id: id2,
                        client: client2,
                        phone: phone2,
                        email: email2,
                        date: date2,
                        description: description2,
                        //service_id: service_id2,
                        state: state2,
                        _token: _token2
                    },
                    success:function(response){
                        if(response){
                            $('#QuoteModal').modal('hide');
                            toastr.success('Se cambió el estado de la cita ha ' + validation, 'ESTADO DE CITA', {timeOut:3000});
                            $('#quotes_table').DataTable().ajax.reload();
                        }
                    }
                });
            }
        }

        function EnviarCorreo()
        {
            if ($('#quote-form').valid())
            {
                var id2 = $('#Quote_id').val();
                var client2 = $('#txtClient').val();
                var phone2 = $('#txtPhone').val();
                var email2 = $('#txtEmail').val();
                var date2 = $('#txtDate').val();
                var description2 = $('#txtDescription').val();
                //var service_id2 = $('#txtService').val();
                var state2 = $('#txtState').val();
                var _token2 = $("input[name=_token]").val();

                $.ajax({
                    url: "{{ route('admin.messages.store') }}",
                    method: "POST",
                    data:{
                        id: id2,
                        client: client2,
                        phone: phone2,
                        email: email2,
                        date: date2,
                        description: description2,
                        //service_id: service_id2,
                        state: state2,
                        _token: _token2
                    },
                    success:function(response){
                        if(response){
                            $('#QuoteModal').modal('hide');
                            toastr.success('Se envió el mensaje al correo ' + email2, 'MENSAJE ENVIADO', {timeOut:3000});
                            $('#quotes_table').DataTable().ajax.reload();
                        }
                    }
                });
            }
        }
    </script>
</body>
</html>
