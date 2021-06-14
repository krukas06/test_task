<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use  App\Repositories\MessageRepository;
use App\Mess;


class MessageController extends Controller
{

    public function store(Request $request)
    {
        //
        $data = $request->all();

        $message = new  Mess;
        $message ->fill($data);
        $message ->save();
        //return 1;

        return redirect('/');

    }
}
