@extends('admin.layout')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark" style="font-weight: bold;">CITAS</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    @include('admin.partials.modal_date')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Citas de los Clientes</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Date -->
            <div class="row input-daterange">
                <div class="col-md-3 input-group date">
                    <input type="text" name="from_date" id="from_date" class="form control datetimepicker-input" placeholder="Desde" readonly>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                <div class="col-md-3 input-group date">
                    <input type="text" name="to_date" id="to_date" class="form control datetimepicker-input" placeholder="Hasta" readonly>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="button" name="filter" id="filter" class="btn btn-primary">Buscar</button>
                    <button type="button" name="refresh" id="refresh" class="btn btn-secondary">Recargar</button>
                </div>
            </div>
            <br>
            <!-- Table -->
            <table id="quotes_table" class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>N°</th>
                        <th>Cliente</th>
                        <th>Teléfono</th>
                        <th>Estado</th>
                        <th>Ver Detalles</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    @include('admin.quotes.modal_quote')
@endsection
