<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1d2129;border-right: 8px solid #e75b1e;">   <!--bg-gradient-primary-->

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">FoodTPie Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="{{ (request()->is('admin')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link" href="{{url('/admin') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Account
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="{{ (request()->is('register/admin')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Account Components:</h6>
            <a class="collapse-item" href="{{ url('register/admin' )}}">Register</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Controls
      </div>

          <!-- Nav Item - Charts -->
      <li class="{{ (request()->is('admin/products')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link" href="{{url('admin/products')}}">
          <i class="fas fa-fw fa-hamburger"></i>
          <span>Products</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="{{ (request()->is('admin/orders')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link" href="{{ url('admin/orders') }}">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Orders</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="{{ (request()->is('admin/userControl')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link" href="{{ url('admin/userControl') }}">
          <i class="fas fa-fw fa-user"></i>
          <span>Customers</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
