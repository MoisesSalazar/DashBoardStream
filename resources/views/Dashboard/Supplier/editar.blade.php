<!-- Modal -->
<div class="modal fade" id="modal-editar-{{$Supplier->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.supplier.editar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Editar Supplier</h4>
                        <div class="form-group">
                            <label for="exampleInputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{$Supplier->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Celular</label>
                            <input type="text" name="phone" class="form-control" value="{{$Supplier->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Yape</label>
                            <input type="text" name="yape" class="form-control" value="{{$Supplier->yape}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Plin</label>
                            <input type="text" name="plin" class="form-control" value="{{$Supplier->plin}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" name="id" value="{{$Supplier->id}}" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>