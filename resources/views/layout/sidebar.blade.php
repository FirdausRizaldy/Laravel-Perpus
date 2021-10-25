<aside class="main-sidebar sidebar-light-light elevation-4 " style="background-color: #4dccc6;
background-image: linear-gradient(315deg, #4dccc6 0%, #96e4df 74%);">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('/')}}/image/peep-08.png" class="img-circle elevation-2" alt="User Image">
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
            <a href="/blankPage" class="nav-link active">
           @else
            <a href="/blankPage" class="nav-link">
           @endif
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
                
              </p>
            </a>
          </li>
          <li class="nav-item">
           @if($menu == 'pegawai')
            <a href="/pegawai" class="nav-link active">
           @else
            <a href="/pegawai" class="nav-link">
           @endif
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                Pegawai
                
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
           @if($menu == 'anggota')
            <a href="/anggota" class="nav-link active">
           @else
           <a href="/anggota" class="nav-link">
           @endif
              <i class="nav-icon fas fa-users"></i>
              <p>
                Anggota
                
              </p>
            </a>
          </li>
          <!--data master_------------------------------------------------------>
          <li class="nav-item has-treeview">
            @if($menu == 'data_buku')
             <a href="#" class="nav-link active">
            @else 
             <a href="#" class="nav-link">
            @endif 
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
             <!--buku-->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                @if($submenu == 'buku')
                 <a href="/buku" class="nav-link active">
                @else 
                 <a href="/buku" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
              <!--jenis buku-->
              <li class="nav-item">
                @if($submenu == 'jenis_buku')
                 <a href="/jenisBuku" class="nav-link active">
                @else 
                 <a href="/jenisBuku" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Buku</p>
                </a>
              </li>
              <!--penerbit-->
              <li class="nav-item">
                @if($submenu == 'penerbit')
                 <a href="/penerbit" class="nav-link active">
                @else 
                 <a href="/penerbit" class="nav-link">
                @endif 
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <!--bahasa-->
              <li class="nav-item">
                @if($submenu == 'bahasa')
                 <a href="/bahasa" class="nav-link active">
                @else 
                 <a href="/bahasa" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahasa</p>
                </a>
              </li>
              <!--eksemplar-->
              <li class="nav-item">
                @if($submenu == 'kode')
                 <a href="/eksemplar" class="nav-link active">
                @else 
                 <a href="/eksemplar" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Eksemplar</p>
                </a>
              </li>
            </ul>
          </li>
          <!--data transaksi------------------------------------------------------>
          <li class="nav-item has-treeview">
            @if($menu == 'transaksi')
             <a href="#" class="nav-link active">
            @else 
             <a href="#" class="nav-link">
            @endif 
              <i class="nav-icon fa fa-handshake"></i>
              <p>
                Data transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <!--peminjaman-->
          <li class="nav-item">
            @if($submenu == 'peminjaman')
             <a href="/peminjaman" class="nav-link active">
            @else 
             <a href="/peminjaman" class="nav-link">
            @endif
              <i class="nav-icon fa fa-share"></i>
              <p>
                Peminjaman
                
              </p>
            </a>
          </li>
          <!--pengembalian-->
          
          <li class="nav-item has-treeview">
            @if($submenu == 'pengembalian')
             <a href="/pengembalian" class="nav-link active">
            @else 
             <a href="/pengembalian" class="nav-link">
            @endif 
              <i class="nav-icon fas fa-reply"></i>
                Pengembalian
                
              </p>
            </a>
          </li>
      
           <!--penerimaan-->
          <li class="nav-item">
            @if($submenu == 'penerimaan')
             <a href="/penerimaan" class="nav-link active">
            @else 
             <a href="/penerimaan" class="nav-link">
            @endif
              <i class="nav-icon far fa-map"></i>
              <p>
                Penerimaan
                
              </p>
            </a>
          </li>
        </ul>

      <!--history------------------------------------------------------>
          <li class="nav-item has-treeview">
            @if($menu == 'history')
             <a href="#" class="nav-link active">
            @else 
             <a href="#" class="nav-link">
            @endif 
              <i class="nav-icon fa fa-history"></i>
              <p>
                History
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <!--peminjamanBuku-->
              <li class="nav-item">
                @if($submenu == 'peminjamanBuku')
                 <a href="/history/peminjamanBuku" class="nav-link active">
                @else 
                 <a href="/history/peminjamanBuku" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman Buku</p>
                </a>
              </li>
               <!--peminjamanAnggota-->
              <li class="nav-item">
                @if($submenu == 'peminjamanAnggota')
                 <a href="/history/peminjamanAnggota" class="nav-link active">
                @else 
                 <a href="/history/peminjamanAnggota" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman Anggota</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- logout -->
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