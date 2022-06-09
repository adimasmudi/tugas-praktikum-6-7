<x-layout :active="$active">
    <!-- Content -->
<div class="container-md pt-4">
    <h1 class="text-brand mb-4">Data Mahasiswa</h1>
    <div class="row ps-2 pe-2">
        
        
        @if (count($mahasiswa) > 0)
        @foreach ($mahasiswa as $m)
        <x-card :mahasiswa="$m" />
    @endforeach
        @else
            <h6 style="margin-bottom:170px">Tidak ada data mahasiswa</h6>
        @endif
    
        
        
    </div>
</div>
<!-- End Content -->
</x-layout>