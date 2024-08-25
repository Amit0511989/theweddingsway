<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LogoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    

    public function logo_setting(){
        //dd(public_path());
        $logo_detail = LogoSetting::first();
        return view('admin.logo_setting',compact('logo_detail'));
    }

    public function save_logo_settings(Request $request){
        $logo_detail = LogoSetting::first();
        if($request->hasFile('logo')){
            $filename = $request->logo->getClientOriginalName();
            $path = public_path().'/uploads/logo';
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            } 
            $request->logo->move($path, $filename); 
            //$request->logo->storeAs('logo',$filename,'public');
        }
        if (!is_null($logo_detail)) {
            $logo_detail->update([
                'title' => $request->logo_title ?? $logo_detail->title,
                'logo' => $filename ?? $logo_detail->logo 
            ]);
        }else{
            LogoSetting::create([
                'title' => $request->logo_title,
                'logo' => $filename
            ]);
        }
        return redirect()->back();
    }

}