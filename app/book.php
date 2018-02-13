<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
      'book_name' => 'required',
      'book_introduction' => 'required',
      'book_code' => 'required'
  );
  public static $messages = array(
      'book_name.required' => '名前を入れて下さい',
      'book_introduction.required' => '内容を入れて下さい',
      'book_code.required' => 'コードを入れて下さい'
  );
}
