<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
        //return $request->input('name');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        return 'SUCCESS';
    }
}
