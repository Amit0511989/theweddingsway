<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserReferral;
use App\Models\LogoSetting;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Mail;

class LocationController extends Controller
{
    public function index(Request $request){
        $locations = Location::orderby('id', 'desc')->get();
         if ($request->ajax()) { 
            return DataTables::of($locations)
             
            ->addColumn('action', function($locations){
                $actionBtn = '<div class="d-flex flex-row-reverse">
                <form method="GET" action="'. route("user_delete", $locations->id) .'"> <input type="hidden" name="_token" value="'. csrf_token() .'" />                  
                <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove show_confirm"><i class="fas fa-times"></i></a>
                </form><a href="'. url("/admin/location_edit", $locations->id) .'" class="btn btn-round btn-warning btn-icon btn-sm edit mr-2"><i class="fas fa-edit"></i></a> </div>';
                return $actionBtn;
            })
            ->escapeColumns([])       
            ->make(true);
        } 
        return view('admin.location.index',compact('locations'));
    }
   

    // create function
    public function create()
    {
        return view('admin.location.create');
    }

    // store function
    public function store(Request $request)
    {
        /* $this->validate($request, [
            'name' => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string|min:4|max:255',
        ]); */

       
        $data = [
            'city' => $request->city,
            'state' => $request->state,
        ];
        
       Location::create($data);        

       

        return redirect('admin/locations')->with('success', 'New location has been created successfully.');
    }

   

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('admin/users')->with('success',
                'User successfully deleted');
    }

 
}
