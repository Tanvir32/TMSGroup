<?php

namespace App\Http\Controllers\Admin;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        // $clients = Client::Where('isActive',1)->get();
        $companies = Company::all();

        if ($request->isMethod('POST')) {

            //return $request->all();

            $validate = $request->validate([
                'name' => 'required',
                'url' => 'required',
                'isActive' => 'required',
                'logo' => 'required|mimes:jpg',
            ]);

            $fileName = "";
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $image_resize = Image::make($file->getRealPath());
                $image_resize->resize(638,319);
                $image_resize->save(public_path('/frontend/assets/img/companies/'.$fileName));
            }

            //return $request->all();
            $insert = Company::create([
                'name' => $request->name,
                'url' => $request->url,
                'isActive' => $request->isActive,
                'logo' => $fileName,
            ]);

            //return $request;

            $message = 'Company Added Successfully.';
            $alert_type = 'success';

            return redirect()->route('admin.company.create')->with(compact('message', 'alert_type', 'companies'));
        }
        return View('admin.home.companies', compact('companies'));
    }


    public function delete($id){
        $companies = Company::all();
        $company = Company::find($id);

        $old_pic = $company->image;

        unlink(public_path('/frontend/assets/img/companies/' . $old_pic));

        $company->delete();

        $message = 'Company Deleted Successfully.';
        $alert_type = 'danger';

        return redirect()->route('admin.company.create')->with(compact('message', 'alert_type','companies'));

    }

}
