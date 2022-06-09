@props(['mahasiswa'])
<div class="card col-md-5 border rounded ms-2 me-2 mt-1 mb-1">
    <div class="row justify-content-between">
        <div class="col-md-6 d-flex flex-column">
            <span class="fw-bold">{{ $mahasiswa->nama }}</span>
            <span>{{ $mahasiswa->NRP }}</span>
            <span>{{ $mahasiswa->alamat }}</span>
        </div>
        <div class="col-md">
            <div class="action-group d-flex flex-row-reverse">
                <a href="/mahasiswa/{{ $mahasiswa->id }}/edit">
                    <div class="btn bg-second-brand btn-circle mt-1 me-1 ms-1"><i
                            class="bi bi-pencil-square text-light"></i></div>
                </a>
                <form method="POST" action="/hapus/{{ $mahasiswa->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn border btn-circle mt-1"><i class="bi bi-trash text-danger"></i></button>
                </form>
            </div>
            <p class="fs-6 text-end">{{ $mahasiswa->email }}</p>
        </div>
    </div>
</div>
