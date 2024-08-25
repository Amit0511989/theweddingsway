<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserReferral;
use App\Models\LogoSetting;
use App\Models\Role;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::with(['role_detail', 'location'])->orderby('id', 'desc')->get();
        /*  echo '<pre>';
        Print_r($users);
        echo '</pre>';
        exit(); */ 
         if ($request->ajax()) { 
            return DataTables::of($users)
             ->addColumn('roles',function($users){
                return $users->role_detail->name;
             })
            ->addColumn('action', function($users){
                $actionBtn = '<div class="d-flex flex-row-reverse">
                <form method="GET" action="'. route("user_delete", $users->id) .'"> <input type="hidden" name="_token" value="'. csrf_token() .'" />                  
                <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove show_confirm"><i class="fas fa-times"></i></a>
                </form><a href="'. url("/admin/user_edit", $users->id) .'" class="btn btn-round btn-warning btn-icon btn-sm edit mr-2"><i class="fas fa-edit"></i></a> </div>';
                return $actionBtn;
            })
            ->escapeColumns([])       
            ->make(true);
        } 
        return view('admin.users.index',compact('users'));
    }
   

    // create function
    public function create()
    {
        $locations = Location::orderby('id', 'desc')->get();
        $roles = Role::select(['id', 'name'])->orderBy('id', 'desc')->get();

        return view('admin.users.create',compact('locations','roles'));
    }

    // store function
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string|min:4|max:255',
        ]);

        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'mobile' => $request->mobile,
            'role' => $request->role,
            'location_id' => $request->location_id,
            'status' => 0,
            
        ];
        
        $userdata = User::create($data);        

        

        return redirect('admin/users')->with('success', 'New user has been created successfully.');
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
        $locations = Location::orderby('id', 'desc')->get();
        $roles = Role::select(['id', 'name'])->orderBy('id', 'desc')->get();
        return view('admin.users.edit', compact('user','locations','roles'));
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
        $user->mobile =  $request->input('mobile');  
        $user->role =  $request->input('role');  
        $user->location_id =  $request->input('location_id');  
        $user->status =  $request->input('status');  
        
        
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

   public function roles(Request $request){

    $roles = Role::select(['id', 'name'])->orderBy('id', 'desc')->get();
         if ($request->ajax()) { 
            return DataTables::of($roles)
             
            ->addColumn('action', function($roles){
                /* $actionBtn = '<div class="d-flex flex-row-reverse">
                <form method="GET" action="'. route("user_delete", $roles->id) .'"> <input type="hidden" name="_token" value="'. csrf_token() .'" />                  
                <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove show_confirm"><i class="fas fa-times"></i></a>
                </form><a href="'. url("/admin/user_edit", $roles->id) .'" class="btn btn-round btn-warning btn-icon btn-sm edit mr-2"><i class="fas fa-edit"></i></a> </div>';
                 */

                 $actionBtn ='Action';
                return $actionBtn;
            })
            ->escapeColumns([])       
            ->make(true);
        } 

        return view('admin.users.roles.index');
   }

   public function  addRole(){
        return view('admin.users.roles.add');
   }

   public function saveRole(Request $request){

    $role_name = $request->name;
    $slug= str_replace(' ','_',strtolower($role_name));
    $status = $request->status;

    $data = [
        'name' => $role_name,
        'slug' => $slug,
        'status' => $status,
    ];
    

    $Role = Role::create($data);

    return redirect('admin/roles')->with('success', 'New role has been created successfully.');
   }
}
