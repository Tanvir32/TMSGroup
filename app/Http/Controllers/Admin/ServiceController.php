<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        // $clients = Client::Where('isActive',1)->get();
        $services = Service::all();

        if ($request->isMethod('POST')) {

            //return $request->all();

            $validate = $request->validate([
                'name' => 'required',
                'isActive' => 'required',
                'image' => 'required|mimes:jpg',
            ]);

            $fileName = "";
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(600, 600);
                $image_resize->save(public_path('/frontend/assets/img/services/' . $fileName));
            }

            //return $request->all();
            $insert = Service::create([
                'name' => $request->name,
                'isActive' => $request->isActive,
                'image' => $fileName,
            ]);

            //return $request;

            $message = 'Company Added Successfully.';
            $alert_type = 'success';

            return redirect()->route('admin.service.create')->with(compact('message', 'alert_type', 'services'));
        }
        return View('admin.home.services', compact('services'));
    }

    public function delete($id){
        $services = Service::all();
        $service = Service::find($id);

        $old_pic = $service->image;

        unlink(public_path('/frontend/assets/img/services/' . $old_pic));
        unlink(public_path('/frontend/assets/img/services/' . $old_pic));

        $service->delete();

        $message = 'Service Deleted Successfully.';
        $alert_type = 'danger';


        return redirect()->route('admin.service.create')->with(compact('message', 'alert_type','services'));

    }
}
