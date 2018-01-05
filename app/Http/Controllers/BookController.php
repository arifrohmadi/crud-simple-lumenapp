<?php
namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
	public function index()
	{
		$books = Book::All();
		return response()->json($books);
	}

	public function getBook($id)
	{
		return response()->json(Book::find($id));
	}


	public function createBook(Request $request)
	{
		$book = Book::create($request->all());
		return response()->json($book);
	}

	public function deleteBook($id)
	{
		$book = Book::find($id);
		$book->delete();

		return response()->json('deleted');
	}

	//hasil kopian dari internet (warna return jadi biru, bikin eror)
	/*
	public function updateBook(Request $request,$id){
        $Book  = Book::find($id);
        $Book->title = $request->input('title');
        $Book->author = $request->input('author');
        $Book->isbn = $request->input('isbn');
        $Book->save();
  
        return response()->json($Book);
	}
	*/
	
	
	//hasil ketik sendiri, warna return merah, lancar dijalankan
	
	
	public function updateBook(Request $request,$id)
	{
		$Book = Book::find($id);
		$Book->title = $request->input('title');
		$Book->author = $request->input('author');
		$Book->isbn = $request->input('isbn');
		$Book->save();

		return response()->json($Book);
	} 

}


?>