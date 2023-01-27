@extends('Dashboard.Plantilla.template')

@section('sidebar_menu')
@include('Dashboard.sidebar')
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Productos</h4>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CrearModal">
                    + Crear Nuevo Producto
                </button>
            </div>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Nombre </th>
                            <th> Descripción </th>
                            <th> P. Venta </th>
                            <th> P. Compra </th>
                            <th> Foto </th>
                            <th> Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Productos as $Product)
                        <tr>
                            <td>{{$Product->name}}</td>
                            <td>{{$Product->description}}</td>
                            <td>{{$Product->price_sale}}</td>
                            <td>{{$Product->price_buy}}</td>
                            <td class="py-1">
                                <img src="{{asset($Product->photo)}}" alt="image" />
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-editar-{{$Product->id}}"><i id="centrar" class='mdi mdi-table-edit '></i></button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-eliminar-{{$Product->id}}"><i id="centrar" class='mdi mdi-delete-sweep'></i></button>
                            </td>
                        </tr>
                        @include('Dashboard.Producto.editar')
                        @include('Dashboard.Producto.eliminar')
                        @endforeach
                        <tr>

                            <td class="py-1">
                                <img src="{{asset('Resource/Dashboard/assets/images/faces-clipart/pic-1.png')}}" alt="image" />
                            </td>
                            <td> Herman Beck </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-editar"><i id="centrar" class='mdi mdi-table-edit '></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-subir"><i id="centrar" class='mdi mdi-delete-sweep'></i></button>
                            </td>
                        </tr>
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
            <form action="{{Route('dashboard.administrador.producto.crear')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Nuevo Producto</h4>
                        <div class="form-group">
                            <label for="exampleInputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Descripción</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Precio de Venta</label>
                            <input type="number" name="price_sale" step=0.01 class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Precio de Compra</label>
                            <input type="number" name="price_buy" step=0.01 class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>File upload</label>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="customFileLang" lang="es" required>
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            </div>
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