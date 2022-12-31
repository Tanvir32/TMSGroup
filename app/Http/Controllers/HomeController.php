<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\HeroBanner;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function home()
    {
        $banners = HeroBanner::where('isActive',1)->orderBy('id','desc')->get();
        $companies = Company::Where('isActive', 1)->orderBy('id','asc')->get();
        $services = Service::where('isActive',1)->get();
        $projects = Project::where('projects.status', '!=', 'Disabled')->orderBy('id','desc')->get();


        return view('test',compact('banners','projects','companies','services'));
    }

    public function about()
    {
        $clients = Client::Where('isActive', 1)->orderBy('id','asc')->get();

        return view('frontend.about', compact('clients'));
    }

}
