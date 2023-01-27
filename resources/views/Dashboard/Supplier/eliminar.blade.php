<!-- Modal -->
<div class="modal fade" id="modal-eliminar-{{$Supplier->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.supplier.eliminar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Eliminar Supplier</h4>
                        <div class="form-group">
                            {{$Supplier->name}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" name="id" value="{{$Supplier->id}}" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>