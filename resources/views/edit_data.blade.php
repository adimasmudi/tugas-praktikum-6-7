<x-layout :active="$active">
    <!-- content -->

    <div class="container-md pt-4">
        <h1 class="text-brand mb-4">Detail Data Mahasiswa</h1>
        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="nama"><span class="fw-bold">Nama Mahasiswa</span></label>
                        <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama Mahasiswa"
                            aria-label="default input example" value="{{ $mahasiswa->nama }}">
                        @error('nama')
                            <span class="text-danger mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="email"><span class="fw-bold">Alamat Email</span></label>
                        <input class="form-control" name="email" id="email" type="text" placeholder="Alamat Email"
                            aria-label="default input example" value="{{ $mahasiswa->email }}">
                        @error('email')
                            <span class="text-danger mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="nim"><span class="fw-bold">NRP</span></label>
                        <input class="form-control" name="NRP" id="nim" type="text" placeholder="NIM"
                            aria-label="default input example" value="{{ $mahasiswa->NRP }}">
                        @error('NRP')
                            <span class="text-danger mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="alamat"><span class="fw-bold">Alamat Rumah</span></label>
                        <input class="form-control" name="alamat" id="alamat" type="text" placeholder="Alamat Rumah"
                            aria-label="default input example" value="{{ $mahasiswa->alamat }}">
                        @error('alamat')
                            <span class="text-danger mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4 d-flex justify-content-end">
                        <input type="submit" class="btn bg-brand text-light" value="Edit">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Content -->
</x-layout>
