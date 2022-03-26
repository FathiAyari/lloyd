<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 side">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Tableau de bord  </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="{{asset('dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
<p class="text-light">Feryel LIMEM</p>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">

                    <a href="{{route('clients')}}" class="nav-link">
                        <i class="fa-solid fa-user-gear"></i>
                        <p>
                            List de client

                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="{{route('vehicules')}}" class="nav-link">
                        <i class="fa-solid fa-car-tunnel"></i>
                        <p>
                            List de voitures

                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="fa fa-user-shield"></i>
                        <p>

                            Assurance
                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="#" class="nav-link">
                        <i class="fa fa-file-pdf"></i>
                        <p>Fiche de voiture</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
