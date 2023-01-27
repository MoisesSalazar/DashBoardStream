@extends('Dashboard.Plantilla.template')

@section('sidebar_menu')
@include('Dashboard.sidebar')
@endsection

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Proovedores</h4>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CrearModal">
                    + Crear Nuevo Supplier
                </button>
            </div>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Whatsapp/Celular </th>
                            <th> Yape </th>
                            <th> Plin </th>
                            <th> Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Suppliers as $Supplier)
                        <tr>
                            <td>{{$Supplier->name}}</td>
                            <td>{{$Supplier->phone}}</td>
                            <td>{{$Supplier->yape}}</td>
                            <td>{{$Supplier->plin}}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-editar-{{$Supplier->id}}"><i id="centrar" class='mdi mdi-table-edit '></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar-{{$Supplier->id}}"><i id="centrar" class='mdi mdi-delete-sweep'></i></button>
                            </td>
                        </tr>
                        @include('Dashboard.Supplier.editar')
                        @include('Dashboard.Supplier.eliminar')
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
                <h5 class="modal-title" id="exampleModalLabel">Crear Proovedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.supplier.crear')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Nuevo Supplier</h4>
                        <div class="form-group">
                            <label for="exampleInputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Celular</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Yape</label>
                            <input type="text" name="yape" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Plin</label>
                            <input type="text" name="plin" class="form-control">
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