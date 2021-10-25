<aside class="main-sidebar sidebar-light-light elevation-4 " style="background-color: #4dccc6;
background-image: linear-gradient(315deg, #4dccc6 0%, #96e4df 74%);
">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('/')}}/image/peep-09.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="#" class="d-block">{{ Auth::user()->name }}</a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
           @if($menu == 'home')
            <a href="/blankPageAnggota" class="nav-link active">
           @else
            <a href="/blankPageAnggota" class="nav-link">
           @endif
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            @if($menu == 'data_buku')
             <a href="#" class="nav-link active">
            @else 
             <a href="#" class="nav-link">
            @endif 
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Buku
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                @if($submenu == 'buku')
                 <a href="/anggota/buku" class="nav-link active">
                @else 
                 <a href="/anggota/buku" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
              <li class="nav-item">
                @if($submenu == 'jenis_buku')
                 <a href="/anggota/jenisBuku" class="nav-link active">
                @else 
                 <a href="/anggota/jenisBuku" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Buku</p>
                </a>
              </li>
              <li class="nav-item">
                @if($submenu == 'penerbit')
                 <a href="/anggota/penerbit" class="nav-link active">
                @else 
                 <a href="/anggota/penerbit" class="nav-link">
                @endif 
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                @if($submenu == 'bahasa')
                 <a href="/anggota/bahasa" class="nav-link active">
                @else 
                 <a href="/anggota/bahasa" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahasa</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            @if($menu == 'history')
             <a href="/anggota/history" class="nav-link active">
            @else 
             <a href="/anggota/history" class="nav-link">
            @endif
              <i class="nav-icon fas fa-stopwatch"></i>
              <p>
                History
                
              </p>
            </a>
          </li>

          <li class="nav-item">
             <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                LOGOUT
                
              </p>
            </a>
          </li>
          
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>