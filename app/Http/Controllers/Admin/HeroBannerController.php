<?php

namespace App\Http\Controllers\Admin;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\HeroBanner;
use Illuminate\Http\Request;

class HeroBannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        // $clients = Client::Where('isActive',1)->get();
        $banners = HeroBanner::all();

        if ($request->isMethod('POST')) {

            //return $request->all();

            $validate = $request->validate([
                'name' => 'required',
                'banner' => 'required|image|mimes:jpeg,png,jpg|max:1024',
                'isActive' => 'required',
            ]);

            //return $request->all();

            $fileName = "";
            if ($request->hasFile('banner')) {
                $file = $request->file('banner');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(953,248);
                $image_resize->save(public_path('/frontend/assets/wowslider/data1/images/'.$fileName));
                $image_resize->resize(184,48);
                $image_resize->save(public_path('/frontend/assets/wowslider/data1/tooltips/'.$fileName));
            }

            //return $request->all();
            $insert = HeroBanner::create([
                'name' => $request->name,
                'banner' => $fileName,
                'isActive' => $request->isActive

            ]);

            //return $request;

            $message = 'Banner Added Successfully.';
            $alert_type = 'success';

            return redirect()->route('admin.banner.create')->with(compact('message', 'alert_type', 'banners'));
        }
        return View('admin.home.banners', compact('banners'));
    }

    public function delete($id){
        $banners = HeroBanner::all();
        $banner = HeroBanner::find($id);

        $old_pic = $banner->banner;

        unlink(public_path('/frontend/assets/wowslider/data1/images/' . $old_pic));
        unlink(public_path('/frontend/assets/wowslider/data1/tooltips/' . $old_pic));

        $banner->delete();

        $message = 'Banner Deleted Successfully.';
        $alert_type = 'danger';


        return redirect()->route('admin.banner.create')->with(compact('message', 'alert_type','banners'));
    }

}
