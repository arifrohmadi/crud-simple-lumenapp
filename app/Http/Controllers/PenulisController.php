<?php

namespace App\Http\Controllers;

use App\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
	public function tampilSemuaPenulis()
	{
		return response()->json(Penulis::all());
	}

	public function tampilSatuPenulis($id)
	{
		return response()->json(Penulis::find($id));
	}

	public function create(Request $request)
	{
		/*$this->validate($request, [
				'nama' => 'required',
				'email' => 'required|email|unique:users',
				'lokasi' => 'required|alpha'
			]); */

		$penulis = Penulis::create($request->all());
		return response()->json($penulis,201);
	}

	public function update($id, Request $request)
	{
		$penulis = Penulis::findOrFail($id);
		$penulis->update($request->all());

		return response()->json($penulis,200);

	}

	public function delete($id)
	{
		Penulis::findOrFail($id)->delete();
		return response('Data Berhasil Dihapus',200);
	}
}

?>