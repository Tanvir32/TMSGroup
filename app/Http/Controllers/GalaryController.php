<?php

namespace App\Http\Controllers;

use App\Models\Galary;
use Illuminate\Http\Request;

class GalaryController extends Controller
{
    //

    public function galaryByProject($id){
        $data = Galary::where('project_id','=',$id)->join('projects','projects.id','=', 'galaries.project_id')->get();
        return response()->json(['data'=>$data]);
    }
}
