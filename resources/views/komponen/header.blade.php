<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
    <a href="/siswa" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <span class="fs-4 text-light">Tabel Data Siswa</span>
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item"><a href="/siswa" class="nav-link active" aria-current="page">Siswa</a></li>
      <form onsubmit="return confirm('Yakin Mau Logout ?')" action="/sesi/logout" method="get" >
        @csrf
      <li class="nav-item"><button class="nav-link text-light">Logout</button></li>
    </form>
    </ul>
  </header>