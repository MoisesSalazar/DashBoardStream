@extends('Dashboard.Plantilla.template')

@section('sidebar_menu')
@include('Dashboard.sidebar')
@endsection

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Venta</h4>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CrearModal">
                    + Ingresar Nueva Venta
                </button>
            </div>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Correo </th>
                            <th> Perfil </th>
                            <th> PIN </th>
                            <th> Usuario </th>
                            <th> Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($SaleAccounts as $SaleAccount)
                        <tr>
                            <td>{{$SaleAccount->email}} - {{$SaleAccount->product}}</td>
                            <td>{{$SaleAccount->proffile}}</td>
                            <td>{{$SaleAccount->pin}}</td>
                            <td>{{$SaleAccount->name}} - {{$SaleAccount->email_user}}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-editar-{{$SaleAccount->id}}"><i id="centrar" class='mdi mdi-table-edit '></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar-{{$SaleAccount->id}}"><i id="centrar" class='mdi mdi-delete-sweep'></i></button>
                            </td>
                        </tr>
                        @include('Dashboard.SaleAccount.editar')
                        @include('Dashboard.SaleAccount.eliminar')
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="CrearModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.saleaccount.crear')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Nueva Venta</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Perfil</label>
                            <input type="text" name="proffile" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">PIN</label>
                            <input type="text" name="pin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Usuario</label>
                            <select class="text-white js-example-basic-single" style="width:100%;" name="user_id">
                                @foreach($Users as $User)
                                <option value="{{$User->id}}">{{$User->name}} - {{$User->email}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Cuenta</label>
                            <select class="form-control text-white" name="account_id" aria-label=".form-select-lg example">
                                <option selected>Selecciona un Accounto</option>
                                @foreach($Accounts as $Account)
                                <option value="{{$Account->id}}">{{$Account->product}} - {{$Account->email}} - {{$Account->date_create}} </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection