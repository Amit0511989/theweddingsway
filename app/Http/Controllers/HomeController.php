<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locations = Location::orderby('id', 'desc')->get();
        $roles = Role::select(['id', 'name','slug'])->orderBy('id', 'desc')->get();

        $top_vendors = User::with(['role_detail', 'location'])->take(8)->get()->toArray();
        /* echo '<pre>';
        Print_r($top_vendors);
        echo '</pre>';
        exit(); */
        return view('home', compact('locations','roles','top_vendors'));
    }

    public function profile($id)
    {
        $user = User::with(['role_detail', 'location'])->where('id', $id)->first();

        return view('profile', compact('user'));
    }


    public function venderBySlug($slug){

        $locations = Location::orderby('id', 'desc')->get();
        $roles = Role::select(['id', 'name'])->orderBy('id', 'desc')->get();
        $category = Role::select(['id','name'])
            ->where('slug', $slug)
            ->first();

        $category_id =  $category->id;   
        
        $vendors = User::with(['role_detail', 'location'])->where('role', $category_id)->get()->toArray();
        
        

        return view('user.all', compact('locations','roles','category','vendors'));
    }
}
