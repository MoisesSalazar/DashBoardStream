<li class="nav-item profile">
    <div class="profile-desc">
        <div class="profile-pic">
            <div class="count-indicator">
                <img class="img-xs rounded-circle " src="{{asset('avatar.jpg')}}" alt="">
                <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                <span>{{Auth::user()->type}}</span>
            </div>
        </div>
        
    </div>
</li>
<li class="nav-item nav-category">
    <span class="nav-link">Navigation</span>
</li>
<li id="dashboard" class="nav-item ">
    <a class="nav-link" href="{{Route('dashboard.administrador.index')}}">
        <span class="menu-icon">
            <i class="mdi mdi-speedometer activate"></i>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</li>
<li id="producto" class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Productos</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item "> <a class="nav-link" href="{{Route('dashboard.administrador.producto.historial')}}">Historial</a></li>
            <li class="nav-item "> <a class="nav-link" href="{{Route('dashboard.administrador.producto')}}">CRUD</a></li>
        </ul>
    </div>
</li>

<li id="producto" class="nav-item ">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Cuenta</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item "> <a class="nav-link" href="{{Route('dashboard.administrador.supplier.index')}}">Proovedor</a></li>
            <li class="nav-item "> <a class="nav-link" href="{{Route('dashboard.administrador.saleaccount.index')}}">Venta</a></li>
            <li class="nav-item "> <a class="nav-link" href="{{Route('dashboard.administrador.account.index')}}">Compra</a></li>
        </ul>
    </div>
</li>