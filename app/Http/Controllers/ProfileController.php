<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;


class ProfileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $user = [];
        $location = [];
        $currentUserId = Auth::id();
     
        if($currentUserId){
         $user = User::find($currentUserId);
         $location = Location::all();
        }
        
        return view('user.profile', compact('user', 'location'));
    }
}
