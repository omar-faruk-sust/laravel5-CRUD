<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Books as Books;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Session;

class BookController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        $booksList = Books::paginate(7);
        
        //$booksList = Books::all();
        return view('books.index')->with('booksList', $booksList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        // validation rules
        $this->validate($request,
                [
                'isbn' => 'required', 
                'title' => 'required|min:3', 
                'author' => 'required|min:4',
                'publisher' => 'required|min:4',
                'language' => 'required'
                ]); 
        
        Books::create($request->all());
        
        \Session::flash('flash_message', 'Book has been created.');
        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $book = Books::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $book = Books::findOrFail($id);
        return view('books.edit',  compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
         $this->validate($request,
                [
                'isbn' => 'required', 
                'title' => 'required|min:3', 
                'author' => 'required|min:4',
                'publisher' => 'required|min:4',
                'language' => 'required'
                ]);
        $book = Books::findOrFail($id);
        $book->update($request->all());
        
        \Session::flash('flash_message', 'Book has been Updated.');
        return redirect('books');
    }
    
    public function delete($id) {
        Books::find($id)->delete();
        die('ddd');
        \Session::flash('flash_message', 'Book has been deleted.');
        return Redirect::route('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {

        Books::find($id)->delete();
        
        \Session::flash('flash_message', 'Book has been deleted.');
        return Redirect::route('books');
    }

}
