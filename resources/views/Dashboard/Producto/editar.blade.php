<!-- Modal -->
<div class="modal fade" id="modal-editar-{{$Product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.producto.editar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Editar Producto</h4>
                        <div class="form-group">
                            <label for="exampleInputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{$Product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Descripción</label>
                            <input type="text" name="description" class="form-control" value="{{$Product->description}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Precio de Venta</label>
                            <input type="number" name="price_sale" step=0.01 class="form-control" value="{{$Product->price_sale}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Precio de Compra</label>
                            <input type="number" name="price_buy" step=0.01 class="form-control" value="{{$Product->price_buy}}">
                        </div>

                        <div class="form-group">
                            <label>File upload</label>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="customFileLang" lang="es" >
                                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" name="id" value="{{$Product->id}}" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>