<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link d-flex flex-column align-items-center justify-content-center text-center" href="">
            <i class="fa fa-dashboard mb-1"></i>
            <span></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex flex-column align-items-center justify-content-center text-center" href="">
            <i class="fa fa-dashboard mb-1"></i>
            <span></span>
        </a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link d-flex flex-column align-items-center justify-content-center text-center" href="{{ url('/dashboard') }}">
            <i class="fa fa-dashboard mb-1"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Employee Management -->
    <li class="nav-item">
        <a class="nav-link d-flex flex-column align-items-center justify-content-center text-center" href="{{ route('employees.index') }}">
            <i class="fas fa-fw fa-tachometer-alt mb-1"></i>
            <span>Employee Management</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - System Management -->
    <li class="nav-item">
        <a class="nav-link collapsed d-flex flex-column align-items-center justify-content-center text-center" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-fw fa-wrench mb-1"></i>
            <span>System Management</span>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('country.index') }}">Country</a></li>
            <li><a class="dropdown-item" href="{{ route('state.index') }}">State</a></li>
            <li><a class="dropdown-item" href="{{ route('city.index') }}">City</a></li>
        </ul>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - User Management -->
    <li class="nav-item">
        <a class="nav-link collapsed d-flex flex-column align-items-center justify-content-center text-center" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-fw fa-users mb-1"></i>
            <span>User Management</span>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('user.index') }}">User</a></li>
            <li><a class="dropdown-item" href="#">Role</a></li>
            <li><a class="dropdown-item" href="#">Permission</a></li>
        </ul>
    </li>
</ul>
