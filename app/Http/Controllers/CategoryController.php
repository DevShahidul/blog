<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index');
    }

    public function edit($id, Request $request){}
    public function update($id, Request $request){}
    public function store($id, Request $request) {}
    public function destroy($id, Request $request){}
}
