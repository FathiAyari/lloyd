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
<p class="text-light">{{ Auth::user()->name }}</p>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">

                    <a href="{{route('clients.index')}}" class="nav-link">
                        <i class="fa-solid fa-user-gear"></i>
                        <p>
                            List de client

                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="{{route('cars.index')}}" class="nav-link">
                        <i class="fa-solid fa-car-tunnel"></i>
                        <p>
                            List de voitures

                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="{{route("garantie.index")}}" class="nav-link">
                        <i class="fa fa-user-shield"></i>
                        <p>

                            Assurance
                        </p>
                    </a>
                </li>

                <li class="nav-item">

                    <a href="{{route("messages.index")}}" class="nav-link">
                        <i class="fa fa-message"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                             Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

          s
                        <li class="nav-item ml-3">





                            <a href="{{url('')}}" type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-house-user"></i>

                                Aller au site
                            </a>
                        </li>
                        <li class="nav-item ml-3 mt-1">





                            <form action="{{ route('logout') }}" method="POST">

                            @csrf<!-- pour des raison de securité -->
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-arrow-right-from-bracket"></i>

                                    Deconnecter
                                </button>
                            </form>
<!--                            <a  class="nav-link">

                                <p>Deconnecter</p>

                            </a>-->
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
