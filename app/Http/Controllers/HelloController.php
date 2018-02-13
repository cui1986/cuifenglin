<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class HelloController extends Controller
{
  public function index(Request $request)
  {
    $user = Auth::user();
    $sort = $request->sort;
    $items = Auther::orderBy($sort,'asc')->simplePaginate(5);
    $param = ['items'=> $items, 'sort' => $sort, 'user' => $user];
    return view('hello.index', $param);
  }

    /*public function index(Request $request)
    {
      if($request -> isMethod('get')) {
        return view('hello.index');
      }else{
          $rules = [
            'name'    => 'required',
            'age'     => 'numeric|between:0,150',
            'mail'    => 'email',
            'gender'  => 'required',
            'subject' => 'required'
          ];
          $messages = [
            'name.required' => '名前を入れて下さい',
            'age.numeric'   => '整数の年齢を入れて下さい',
            'age.between'   => '年齢を0~150中に入れて下さい',
            'mail.email'    => '正しいのメールを入れて下さい',
            'gender'        => '性別を選択入れて下さい',
            'subject'       => '選択入れて下さい'

          ];
          $validator = Validator::make($request->all(),$rules,$messages);
          if ($validator->fails()) {
            return redirect('hello')
              ->withErrors($validator)
              ->withInput();
          }
          return view('/hello.ok');
      }
    }*/
}
