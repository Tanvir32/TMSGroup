<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Galary;
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
        $data['project_status'] = ['Completed','Disabled','Proposed','Running'];

        return view('admin.Projects.edit',$data);
    }

    public function update($id,Request $request)
    {
        $data = Project::find($id);

        $old_pic = $data->image;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->status = $request->status;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() .'/frontend/assets/img/project';
            $file->move($destinationPath, $fileName);
            unlink(public_path('/frontend/assets/img/project/'.$old_pic ));
            $data->image = $fileName;
        }

        $data->save();

        $message = 'Project Updated Successfully.';
        $alert_type = 'success';



        return redirect()->route('admin.projects')->with(compact('message', 'alert_type'));
    }

    public function delete($id)
    {

        $data = Project::find($id);

        $galleryAll = Galary::Where('project_id',$id)->get();

        foreach($galleryAll as $item){
            $old_gallery_pic = $item->project_image;
            unlink(public_path('/frontend/assets/img/galary/' . $old_gallery_pic));
        }

        $old_pic = $data->image;

        unlink(public_path('/frontend/assets/img/project/' . $old_pic));

        $data->delete();

        $message = 'Project Deleted Successfully.';
        $alert_type = 'success';



        return redirect()->route('admin.projects')->with(compact('message', 'alert_type'));
    }

    public function save(Request $request){
        $validate = $request->validate([
            'title'=>'required',
            'description' => 'required',
            'status'=>'required',
            'image'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/frontend/assets/img/project';
            $file->move($destinationPath, $fileName);
        }



        $insert = Project::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
            'image'=> $fileName,
        ]);



        $message = 'Project Added Successfully.';
        $alert_type = 'success';



        return redirect()->route('admin.projects')->with(compact('message','alert_type'));
    }
}
