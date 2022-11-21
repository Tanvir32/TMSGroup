<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galary;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminGalaryController extends Controller
{
    //
    public function show($id){
        $data['galaries'] = Galary::where('galaries.project_id','=',$id)->get();
        $data['project'] = Project::find($id);

        return view('admin.galary.index',$data);
    }

    public  function update($pID,$id,Request $request){


        $data = Galary::find($id);

        $old_pic = $data->project_image;

        $data->image_title = $request->image_title;


        if ($request->hasFile('project_image')) {
            $file = $request->file('project_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/frontend/assets/img/galary';
            $file->move($destinationPath, $fileName);
            // unlink(public_path('/frontend/assets/img/project/' . $old_pic));
            $data->project_image = $fileName;
        }

        $data->save();



        $message = 'Galary Updated Successfully.';
        $alert_type = 'success';



        return redirect()->route('admin.galary',$pID)->with(compact('message', 'alert_type'));


        return [$pID,$id,$request->all()];
    }

    public function delete($pID,$id){
        $data = Galary::find($id);

        $old_pic = $data->project_image;

        unlink(public_path('/frontend/assets/img/galary/' . $old_pic));

        $data->delete();


        $message = 'Galary Deleted Successfully.';
        $alert_type = 'success';


        return redirect()->route('admin.galary', $pID)->with(compact('message', 'alert_type'));

        return [$pID,$id];
    }

    public function add($id,Request $request){

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/frontend/assets/img/galary';
            $file->move($destinationPath, $fileName);
        }



        $insert = Galary::create([

            'project_id'=>$id,
            'image_title' => $request->title,
            'project_image' => $fileName,
        ]);


        $message = 'Galary Image Added Successfully.';
        $alert_type = 'success';


        return redirect()->route('admin.galary', $id)->with(compact('message', 'alert_type'));

    }
}
