@props(['nav'])

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-brand static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            Simple Siakad
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $nav == 'index' ? 'page-active' : '' }}" href="/"><span
                            class=" {{ $nav == 'index' ? 'text-brand' : '' }}">Data Mahasiswa</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $nav == 'tambah' ? 'page-active' : '' }}" href="/mahasiswa/tambah"><span
                            class=" {{ $nav == 'tambah' ? 'text-brand' : '' }}">Input Data</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $nav == 'about' ? 'page-active' : '' }}" href="/about"><span
                            class=" {{ $nav == 'about' ? 'text-brand' : '' }}">About Us</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation -->
