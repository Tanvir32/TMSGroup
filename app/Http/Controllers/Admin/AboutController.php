<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager as Image;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function delete($id){
        $clients = Client::all();
        $data = Client::find($id);

        $old_pic = $data->logo;

        unlink(public_path('/frontend/assets/img/clients/' . $old_pic));

        $data->delete();


        $message = 'Client Deleted Successfully.';
        $alert_type = 'success';


        return redirect()->route('admin.clients')->with(compact('message', 'alert_type','clients'));
    }

    public function clients(Request $request)
    {

        // $clients = Client::Where('isActive',1)->get();
        $clients = Client::all();

        if ($request->isMethod('POST')) {

            $validate = $request->validate([
                'name'=>'required',
                'url' => 'required',
                'isActive'=>'required',
                'logo'=>'required',
            ]);

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $fileName = time().'.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/frontend/assets/img/clients';
                $file->move($destinationPath, $fileName);
            }

            $insert = Client::create([
                'name'=>$request->name,
                'url'=>$request->url,
                'isActive'=>$request->isActive,
                'logo'=> $fileName,
            ]);

            //return $request;


            $message = 'Client Added Successfully.';
            $alert_type = 'success';


            return redirect()->route('admin.clients')->with(compact('message','alert_type','clients'));
        }
        return View('admin.About.clients',compact('clients'));
    }

}
