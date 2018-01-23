@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
            
 <li class="{{ $request->segment(1) == 'ventas' ? 'active' : '' }}">
                <a href="{{ route('ventas.index') }}">
                         <i class="fa fa-money"></i>
                    <span class="title">Ventas</span>
                </a>
            </li>
         

            
                                    @if(Auth::user()->role_id == 1)
            <li class="{{ $request->segment(1) == 'users' ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">Usuarios</span>
                </a>
            </li>
            @endif
            
          
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span class="title">Salir</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Logout</button>
{!! Form::close() !!}