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
    <a class="nav-link" href="{{Route('dashboard.cliente.index')}}">
        <span class="menu-icon">
            <i class="mdi mdi-speedometer "></i>
        </span>
        <span class="menu-title">Dashboard</span>
    </a>
</li>
<li id="dashboard" class="nav-item ">
    <a class="nav-link" href="{{Route('dashboard.cliente.tienda')}}">
        <span class="menu-icon">
            <i class="mdi mdi-store "></i>
        </span>
        <span class="menu-title">Tienda</span>
    </a>
</li>