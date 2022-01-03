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

    public function clients(Request $request)
    {
        $clients = Client::all();
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $validator = Validator::make($data, [
                'name' => 'required|max:50',
                'image' => 'required',
              ]);
            if ($validator->fails()) {
            //    return $validator->messages();
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            
            $img_file = $request->file('image');
            $img_path = 'frontend/assets/img/clients/';
            $name = time().'.'.$img_file->getClientOriginalExtension();
            $image = Image::make($img_file->path());
            $image->resize(600, 750)->save(public_path('/assets/images/products/'.$name));
            $thumb_img = $img_path . $name;
            $clientData = [
                'name' => $data['name'],
                'url' => $data['url'],
                'image' => $image
            ];
        }
        return View('admin.About.clients',compact('clients'));
    }
    
}
