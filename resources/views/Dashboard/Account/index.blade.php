@extends('Dashboard.Plantilla.template')

@section('sidebar_menu')
@include('Dashboard.sidebar')
@endsection

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Accounts</h4>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CrearModal">
                    + Ingresar Nueva Cuenta
                </button>
            </div>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Correo </th>
                            <th> Password </th>
                            <th> F. Creacion </th>
                            <th> F. Expiracion </th>
                            <th> Proovedor </th>
                            <th> Producto </th>
                            <th> Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Accounts as $Account)
                        <tr>
                            <td>{{$Account->email}}</td>
                            <td>{{$Account->password}}</td>
                            <td>{{$Account->date_create}}</td>
                            <td>{{$Account->date_expirate}}</td>
                            <td>{{$Account->supplier}}</td>
                            <td>{{$Account->product}}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-editar-{{$Account->id}}"><i id="centrar" class='mdi mdi-table-edit '></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar-{{$Account->id}}"><i id="centrar" class='mdi mdi-delete-sweep'></i></button>
                            </td>
                        </tr>
                        @include('Dashboard.Account.editar')
                        @include('Dashboard.Account.eliminar')
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.account.crear')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Nuevo Account</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Correo Electronico</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Password</label>
                            <input type="text" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Proovedor</label>
                            <select class="form-control text-white" name="supplier_id" aria-label=".form-select-lg example">
                                <option selected>Selecciona un Proovedor</option>
                                @foreach($Suppliers as $Supplier)
                                <option value="{{$Supplier->id}}">{{$Supplier->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Producto</label>
                            <select class="form-control text-white" name="product_id" aria-label=".form-select-lg example">
                                <option selected>Selecciona un Producto</option>
                                @foreach($Products as $Product)
                                <option value="{{$Product->id}}">{{$Product->name}} </option>
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