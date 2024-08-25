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
                </form><a href="'. url("/admin/user_edit", $locations->id) .'" class="btn btn-round btn-warning btn-icon btn-sm edit mr-2"><i class="fas fa-edit"></i></a> </div>';
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

    function uniqidGenerated() {
	    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
	    $data = $data ?? random_bytes(16);
	    assert(strlen($data) == 16);

	    // Set version to 0100
	    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
	    // Set bits 6-7 to 10
	    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

	    // Output the 36 character UUID.
	    return vsprintf('%s%s%s%s%s%s', str_split(bin2hex($data), 2));
	}

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $slider = User::find($id);
        $this->validate($request, array(
            'name' =>'required',
            'email'    => 'required|email',           
        ));
        
        $user = User::where('id',$id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');           
        $user->age =  $request->input('age');  
        $user->address =   $request->input('address');  
        $user->gender =   $request->input('gender');  
        $user->mobile_no =  $request->input('mobile_no');  
        $user->pincode =  $request->input('pincode');  
        $user->state =  $request->input('state');  
        $user->aadhar_no =  $request->input('aadhar_no');  
        
        if (!empty($request->new_password) && ($request->new_password == $request->confirm_new_password)) { 
            $user->password = Hash::make($request->input('new_password'));
        } else if(!empty($request->new_password) && ($request->new_password != $request->confirm_new_password)){
            return redirect('admin/users')->with('error',
          'Password mismatch');
        }
        $user->save();

        return redirect('admin/users')->with('success',
          'User, '. $user->name.' updated');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('admin/users')->with('success',
                'User successfully deleted');
    }

 
}
