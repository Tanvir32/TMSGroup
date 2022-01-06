<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        $data['projects']= Project::all();
        return view('admin.Projects.index',$data);
    }

    public function add(){
        return view('admin.Projects.add');
    }
    public function edit($id){

        $data['project']= Project::find($id);

        return $data;
    }

    public function save(Request $request){
        
        return $request->all();
    }
}
