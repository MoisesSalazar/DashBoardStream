@extends('Dashboard.Plantilla.template')
@section('sidebar_menu')
@include('Dashboard.sidebar')
@endsection

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Productos</h4>
            
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection