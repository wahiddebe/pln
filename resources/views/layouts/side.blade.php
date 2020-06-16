<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('dist/img/user.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Session('nama')}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Dashboard</li>
            <li><a href="/"><i class=""></i> <span>Beranda</span></a></li>

            <li class="treeview">
                <a href="#"><span>Transaksi Surat</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="/inbox">Surat Masuk</a></li>
                  <li><a href="/keluar">Surat Keluar</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#"><span>Buku Agenda</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="/agenda_masuk">Surat Masuk</a></li>
                  <li><a href="/agenda_keluar">Surat Keluar</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#"><span>Galeri</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="/g_masuk">Surat Masuk</a></li>
                  <li><a href="/g_keluar">Surat Keluar</a></li>
                </ul>
              </li>
              <li><a href=""><i class=""></i> <span>Referensi</span></a></li>
              <li class="treeview">
                <a href="#"><span>Pengaturan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="#">Instansi</a></li>
                  <li><a href="#">User</a></li>
                  <li class="header"></li>
                  <li><a href="#">Backup Database</a></li>
                  <li><a href="#">Restore Database</a></li>
                </ul>
              </li>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Session('nama') }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </section>
</aside>