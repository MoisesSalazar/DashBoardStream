<!-- Modal -->
<div class="modal fade" id="modal-editar-{{$SaleAccount->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('dashboard.administrador.saleaccount.editar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <h4 class="card-title">Nueva Venta</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Perfil</label>
                            <input type="text" name="proffile" class="form-control" value="{{$SaleAccount->proffile}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">PIN</label>
                            <input type="text" name="pin" class="form-control" value="{{$SaleAccount->pin}}">
                        </div>
                        <div class="form-group">
                            <label for="">Usuario</label>
                            <select class="text-white js-example-basic-single" style="width:100%;" name="user_id">
                                <option value="{{$SaleAccount->user_id}}">{{$SaleAccount->name}} - {{$SaleAccount->email_user}} </option>
                                @foreach($Users as $User)
                                <option value="{{$User->id}}">{{$User->name}} - {{$User->email}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Cuenta</label>
                            <select class="form-control text-white" name="account_id" aria-label=".form-select-lg example">

                                <option value="{{$SaleAccount->account_id}}">{{$SaleAccount->email}} - {{$SaleAccount->product}} </option>
                                @foreach($Accounts as $Account)
                                <option value="{{$Account->id}}">{{$Account->product}} - {{$Account->email}} - {{$Account->date_create}} </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <input type="text" name="id" value="{{$SaleAccount->id}}" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>