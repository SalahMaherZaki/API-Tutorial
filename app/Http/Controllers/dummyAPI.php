<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    public function getData()
    {
        return [
            'name'  =>  'Salah',
            'age'   =>  '26',
            'email' =>  'salah.maher.zaki@gmail.com',
        ];
    }
}
