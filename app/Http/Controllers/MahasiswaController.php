<?php
namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function showAllMahasiswa()
    {
        return response()->json(Mahasiswa::all());
    }

    public function showOneMahasiswa($id)
    {
        return response()->json(Mahasiswa::find($id));
    }

    public function create(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());

        return response()->json($mahasiswa, 201);
    }

    public function update($id, Request $request)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return response()->json($mahasiswa, 200);
    }

    public function delete($id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return response('Data sukses dihapus', 200);
    }
}