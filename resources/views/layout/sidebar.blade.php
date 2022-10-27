<aside class="main-sidebar sidebar-light-purple elevation-4">
    <a href="http://127.0.0.1/home" class="brand-link">
        <img src="http://127.0.0.1/vendor/adminlte/dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-light ">Sistema<b>Suporte</b></span>
    </a>

    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                <li>
                    <div class="form-inline my-2">
                        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="&raquo;">
                            <input class="form-control form-control-sidebar" type="search" placeholder="search" aria-label="search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-fw fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item has-treeview ">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-users"></i><p> {{__("Clientes")}}<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("customers")}}"><p>{{_("Clientes")}}</p></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("createCustomer")}}"><p>{{__("Cadastrar cliente")}}</p></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
