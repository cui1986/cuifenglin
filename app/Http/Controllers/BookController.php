<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Validator;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $items = Book::all();
        return view('book.index',['items'=>$items]);
    }

    public function getDAta()
    {
      return $this->id.':'.$this->Book_name.':'.$this->Book_introduction.'('.$this->book_code.')';
    }

    public function find(Request $request)
    {
      $item = BOOK::find($request->id);
      $data =['item'=>$item];
      return view('book.find',$data);
    }
    /*public function add(Request $request)
    {
      return view('book.add');
    }*/
    public function add(Request $request)
    {
      if($request->isMethod('get')){
      return view('book.add');
    }else{
      $validator = Validator::make($request->all(), Book::$rules, Book::$messages);
      if($validator->fails()){
        return redirect('book/add')
                    ->withErrors($validator)
                    ->withInput();
      }else{
      $book = new Book;
      $form = $request->all();
      unset($form['_token']);
      $book->book_name=$request->book_name;
      $book->book_introduction=$request->book_introduction;
      $book->book_code=$request->book_code;
      $book->save();
      return redirect('/book');
      /*$person->fill($form)->save();
      return redirect('/book');*/
      }
    }
  }
      public function edit(Request $request)
      {
            if($request->isMethod('get')){
            $book = Book::find($request->id);
            return view('book.edit',['form'=>$book]);
        }else{
            $validator = Validator::make($request->all(),Book::$rules, Book::$messages);
            if($validator->fails()){
              return redirect('book/edit/'.$request->id)
                          ->withErrors($validator)
                          ->withInput();
            //$this->validate($request,Book::$rules);Book::$rules, Book::$messages);
        }else{
            $book = Book::find($request->id);
            $form = $request->all();
            unset($form['_token']);
            /*$book->book_name=$request->book_name;
            $book->book_introduction=$request->book_introduction;
            $book->book_code=$request->book_code;
            $book->save();
            return redirect('/book');*/
            $book->fill($form)->save();
            return redirect('/book');
          }
        }
      }
      public function delete(Request $request)
      {
        $book = Book::find($request->id);
        return view('book.del',['form'=>$book]);
      }
      public function remove(Request $request)
      {
        Book::find($request->id)->delete();
        return redirect('book');
      }
}
