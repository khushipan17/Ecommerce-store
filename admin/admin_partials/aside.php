<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION['email'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin/index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
         
          </li>
          <li class="nav-item">
            <a href="categories.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="products.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Products
              
             
              </p>
            </a>
       
          </li>
          <li class="nav-item has-treeview">
            <a href="orders.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Orders
                
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="users.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Users
             
              </p>
            </a>
          
          </li>
       
         
         
        
        
        
         
         
       
          
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>