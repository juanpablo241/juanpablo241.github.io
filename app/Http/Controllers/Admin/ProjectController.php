<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');


    }
    public function getHome(){
        return view('admin.projects.home');
    }

    public function getProjectAdd(){
        return view('admin.projects.add');
    }
}
