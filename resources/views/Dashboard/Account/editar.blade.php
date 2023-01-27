<!-- Modal -->
<div class="modal fade" id="modal-editar-{{$Account->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.account.editar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Nuevo Account</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Correo Electronico</label>
                            <input type="email" name="email" class="form-control" value="{{$Account->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Password</label>
                            <input type="text" name="password" class="form-control" value="{{$Account->password}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">F. Creacion</label>
                            <input type="date" name="date_create" class="form-control" value="{{$Account->date_create}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">F. Expiracion</label>
                            <input type="date" name="date_expirate" class="form-control" value="{{$Account->date_expirate}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Proovedor</label>
                            <select class="form-control text-white" name="supplier_id" aria-label=".form-select-lg example">
                                <option value="{{$Account->supplier_id}}">{{$Account->supplier}}</option>
                                @foreach($Suppliers as $Supplier)
                                <option value="{{$Supplier->id}}">{{$Supplier->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Producto</label>
                            <select class="form-control text-white" name="product_id" aria-label=".form-select-lg example">
                                <option value="{{$Account->product_id}}">{{$Account->product}}</option>
                                @foreach($Products as $Product)
                                <option value="{{$Product->id}}">{{$Product->name}} </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" name="id" value="{{$Account->id}}" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>