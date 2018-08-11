<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('posts.create');
    }
}
