<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }

    public function create(){
        return view('post.create');
    }

    public function edit($id, Request $request){}
    public function update($id, Request $request){}
    public function store($id, Request $request){}
    public function destroy($id, Request $request){}
}
