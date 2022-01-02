<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // dd ('') // dd adalah die and dump
    // ddd ('') // ddd adalah die, dump, debug
    public function create()
    {
        return view('contact');
    }
    public function store()
    {
                            // dd('sendimg');

    }

}
