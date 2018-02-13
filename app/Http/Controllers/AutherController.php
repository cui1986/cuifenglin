<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Auther;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutherController extends Controller
{


  public function add(Request $request)
  {
      return view('auther.add');
  }

  public function create(Request $request)
  {
     $this->validate($request, Auther::$rules);
     $auther = new auther;
     $form = $request->all();
     unset($form['_token']);
     $board->fill($form)->save();
     return redirect('/auther');
  }
  public function index(Request $request)
  {
    if ($request->isMethod('get'))
    {
      $items = Auther::all();
      return view('auther.index',['items'=>$items,'name'=>'','min'=>'','max'=>'']);
    }else {
      $items = Auther::all();
      $finds = Author::find($request->input);
      $item = Auther::where('id',$request->input)->first();
      $param = ['input' => $request->input,'items' => $items,'finds' => $finds];
      return view('auther',$param);
    }
  }
  public function index()
  {
    $users = DB::table('auther')->paginate(3);
    return view('auther.index', ['auther' => $users]);
  }


}
