<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $items = Message::all();
        return view('message.index',['items'=>$items]);
    }

    public function add(Request $request)
    {
        return view('message.add');
    }

    public function create(Request $request)
    {
       $this->validate($request, Message::$rules);
       $message = new message;
       $form = $request->all();
       unset($form['_token']);
       $board->fill($form)->save();
       return redirect('/message');
    }
}
