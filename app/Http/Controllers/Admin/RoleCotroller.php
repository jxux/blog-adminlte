<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleCotroller extends Controller{

    public function index(){
        return view('admin.roles.index');
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        
    }

    public function show($role){
        
    }

    public function edit($role){
        
    }

    public function update(Request $request, $role){
        
    }

    public function destroy($role){
        
    }
}
