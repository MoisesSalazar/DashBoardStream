@extends('Dashboard.Plantilla.template')

@section('sidebar_menu')
@include('Dashboard.Usuario.sidebar')
@endsection

@section('content')
<div class="row">
    @foreach($Cuentas as $Cuenta)

    <div class="col-lg-3">
        <div class="card card-cascade">

            <!-- Card image -->
            <div class="col-lg-12">
                <div class="flip-card" style="height:200px;">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img class="card-img-top" src="{{asset($Cuenta->photo)}}">
                        </div>
                        <div class="flip-card-back">
                            <h1>{{$Cuenta->name}}</h1>
                            <p>Correo: {{$Cuenta->email}}</p>
                            <p>Contraseña: {{$Cuenta->password}}</p>
                            <p>Perfil: {{$Cuenta->proffile}}</p>
                            <p>PIN del Perfil: {{$Cuenta->pin}}</p>
                            <p>Fecha de Venc.: {{date("d-m-Y", strtotime($Cuenta->date_expirate))}}</p>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">


            </div>


        </div>
    </div>
    @endforeach

</div>
@endsection