<?php

namespace App\Http\Controllers\Extra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VaildformAC;

class AController extends Controller
{
    public function show(){
      echo "hello";
    }

    public function showform(){
      return view('form');
    }


    public function savedata(VaildformAC $request)
    {
            return "ello";
    }
}
