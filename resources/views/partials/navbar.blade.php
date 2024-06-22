<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-heading">Home</li>
      <li class="nav-item">
        <a class="nav-link @if(Request::is('dashboard')) active @else collapsed @endif" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Data</li>
      <li class="nav-item">
          <a class="nav-link @if(Request::is('inventaris*')) active @else collapsed @endif" href="inventaris">
              <i class="bi bi-box-seam"></i>
              <span>Inventaris</span>
          </a>
      </li><!-- End Inventaris Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('prasarana') }}">
          <i class="bi bi-building"></i>
          <span>Prasarana</span>
        </a>
      </li><!-- End Prasarana Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('sarana') }}">
          <i class="bi bi-truck"></i>
          <span>Sarana</span>
        </a>
      </li><!-- End Sarana Nav -->

      <li class="nav-heading">Proses</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="kerusakan">
          <i class="bi bi-tools"></i>
          <span>Kerusakan</span>
        </a>
      </li><!-- End Kerusakan Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="request">
          <i class="bi bi-pencil-square"></i>
          <span>Request</span>
        </a>
      </li><!-- End Request Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="laporan">
          <i class="bi bi-file-earmark-fill"></i>
          <span>Laporan</span>
        </a>
      </li><!-- End Laporan Nav -->

      <li class="nav-heading">Pengaturan</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pengaturan">
          <i class="bi bi-people-fill"></i>
          <span>Pengguna</span>
        </a>
      </li><!-- End Pengguna Nav -->
    </ul>
  </aside><!-- End Sidebar-->
  