<ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('admin/Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Login/tenants'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Tenants</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Login/getroomdetail'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Rooms</span></a>
        </li>
           <li class="nav-item">
            <i class="fas fa-fw fa-users"></i>
              <a class="nav-link" href="">
            <span>Finances</span></a>
             <ul class="treeview-menu">
                <li><a href="<?php echo site_url('admin/Login/getpaid'); ?>"><i class="fas fa-fw fa-users"></i>
            <span>Paid Rent</span></a></li>
                <li><a href="<?php echo site_url('admin/Login/getpending'); ?>"><i class="fas fa-fw fa-users"></i>
            <span>Pending Rent</span></a></li>
              </ul>
        </li>
  <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Login/getutilities'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Utilities</span></a>
        </li>
  <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Login/getcomplaints'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Complaints</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Login/communication'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Post communication</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/Manage_Users'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Roles</span></a>
        </li>
      </ul>
