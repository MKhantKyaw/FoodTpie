<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1d2129;border-right: 8px solid #e75b1e;">   <!--bg-gradient-primary-->

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/') }}">
        
          <i class="fa fa-angle-double-left" style="font-size: 20px"></i>
          
        <div class="sidebar-brand-text mx-3">Back to Main Page</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="{{ (request()->is('userDashboard')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link" href="{{url('/userDashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>User Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Controls
      </div>

      <!-- Nav Item - Charts -->
      <li class="{{ (request()->is('/')) ? 'nav-item active': 'nav-item' }}">
        <a class="nav-link" href="{{ url('userDashboard') }}">
          <i class="fa fa-bullhorn"></i>
          <span>Promotions</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
