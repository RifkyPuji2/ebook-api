<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120196,
            'Nama' => 'Rifky Puji Prasetyo',
            'Phone' => '085725896999',
            'Class' => 'XII RPL 6'
        ];
    }
}
