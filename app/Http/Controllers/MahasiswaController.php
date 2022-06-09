<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('index', [
            'active' => 'index',
            'mahasiswa' => Mahasiswa::all()
        ]);
    }

    public function tambah()
    {
        return view('input_data', [
            'active' => 'tambah'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'NRP' => ['required', Rule::unique('mahasiswas', 'NRP')],
            'nama' => 'required',
            'email' => ['required', 'email'],
            'alamat' => 'required'
        ]);

        Mahasiswa::create($data);

        return redirect('/');
    }

    public function about()
    {
        return view('about', [
            'active' => 'about'
        ]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('edit_data', [
            'active' => 'tambah',
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validate([
            'NRP' => ['required'],
            'nama' => 'required',
            'email' => ['required', 'email'],
            'alamat' => 'required'
        ]);

        $mahasiswa->update($data);

        return redirect('/');
    }

    public function hapus(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect('/');
    }
}
